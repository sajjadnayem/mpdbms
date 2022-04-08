<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Demand;
use App\Models\Machine;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Models\DemandMedicine;
use App\Http\Controllers\Controller;
use App\Models\DemandDetails;
use App\Models\MachineMedicine;
use App\Models\User;

class SchedulingController extends Controller
{
    public $officeHour=8;

    public function schedule()
    {
        $schedule=Schedule::with('machine')->get();
        // dd($schedule->all());
        //finding particular machine
        // $machine = Machine::where('id',$schedule->machine_id)->first(); 
        // dd($machine);
         // finding perticular 
        return view('admin.scheduling.scheduling', compact('schedule'));
    }
    public function createSchedule($demand_id)
    {
        $demandDetails=DemandMedicine::find($demand_id);
        $machines = MachineMedicine::with('machine')->where('medicine_id',$demandDetails->medicine_id)->get();
    //   dd($machines);
        return view('admin.scheduling.create_schedule', compact('machines','demandDetails'));

    }
    public function storeSchedule(Request $request)
    {


        //check this demand details has the schedule exist or not


       
        // dd($request->all());
         $demandDetails = DemandMedicine::find($request->demand_details_id);
// dd($demandDetails);
         $machine_details = MachineMedicine::with('machine')->where('machine_id',$request->selecteMachine)->where('medicine_id',$demandDetails->medicine_id)->first();

         $madicine_day_quentity = $machine_details->machine->machine_rpm * $machine_details->quantity;//total quantity in rpm 
       
         $total_time = (int)$demandDetails->quantity / $madicine_day_quentity; // total time
         $hours = intdiv($total_time, 60); // total time 24 h 

    
            
        //check hour less then or equal to office hour
        if($hours<=$this->officeHour)
        {
        
            //create a single schedule
            Schedule::create([
                // 'date'=>$request->date,
                'from_date'=>date('Y-m-d',strtotime($request->time)),
                'details'=>$request->details,
                'time'=>$request->time,
                'machine_id'=>$request->selecteMachine,
                // 'medicine_id'=>$request->medicine
                'demand_details_id'=>$request->demand_details_id,
                'hour'=>$hours,

            ]);
            
        }else
        {
            $loop=$hours/$this->officeHour;
            
            for($i=0; $i<(int)$loop;$i++)
            {
               
                //create schedule
                Schedule::create([
                    // 'date'=>$request->date,
                    'from_date'=>date('Y-m-d',strtotime($request->time.' '.$i.' days')),
                    'details'=>$request->details,
                    'time'=>$request->time,
                    'machine_id'=>$request->selecteMachine,
                    // 'medicine_id'=>$request->medicine
                    'demand_details_id'=>$request->demand_details_id,
                    'hour'=>8,
                ]);
            }
            if($hours%$this->officeHour>0)
            {
                //create schedule for extra hour
                Schedule::create([
                    // 'date'=>$request->date,
                    'from_date'=>date('Y-m-d',strtotime($request->time.' '.$i+1 .' days')),
                    'details'=>$request->details,
                    'time'=>$request->time,
                    'machine_id'=>$request->selecteMachine,
                    // 'medicine_id'=>$request->medicine
                    'demand_details_id'=>$request->demand_details_id,
                    'hour'=>$hours%$this->officeHour,
                ]);
            }
            
        }
       
        return redirect()->route('schedule');
    }




    public function printSchedule($demand_details_id)
    {
        
        $schedule= Schedule::with('machine')->where('demand_details_id',$demand_details_id)->get();
        // dd($schedule);
        return view('admin.scheduling.scheduling_details',compact('schedule'));
    }
}


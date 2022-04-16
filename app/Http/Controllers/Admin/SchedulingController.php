<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Demand;
use App\Models\Machine;
use App\Models\Schedule;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Models\DemandDetails;
use App\Models\DemandMedicine;
use App\Models\MachineMedicine;
use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Barryvdh\DomPDF\PDF as DomPDFPDF;

class SchedulingController extends Controller
{
    public $officeHour=8;

    public function schedule()
    {
        $status = null;
        $medicine = Medicine::all();
        $schedule=Schedule::with('machine')->get();
        // dd($schedule->all());
        //finding particular machine
        // $machine = Machine::where('id',$schedule->machine_id)->first(); 
        // dd($machine);
         // finding perticular 
        return view('admin.scheduling.scheduling', compact('schedule','medicine','status'));
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

        $request->validate([
            'details'=>'required',
            'selecteMachine'=>'required',
            'schedule_date'=>'required'
        ]);


        //check this demand details has the schedule exist or not


       
        // dd($request->all());
         $demandDetails = DemandMedicine::find($request->demand_details_id);
// dd($demandDetails);
         $machine_details = MachineMedicine::with('machine')->where('machine_id',$request->selecteMachine)
                            ->where('medicine_id',$demandDetails->medicine_id)->first();
        // dd($machine_details);                                                     

         $madicine_day_quentity = $machine_details->machine->machine_rpm * $machine_details->quantity;//total quantity in rpm 
       
         $total_time = (int)$demandDetails->quantity / $madicine_day_quentity; // total time
         $hours = intdiv($total_time, 60); // total time 24 h 

    
            
        //check hour less then o                                                                                                                                                       r equal to office hour
        if($hours<=$this->officeHour)
        {
        
            //create a single schedule
            Schedule::create([
                // 'date'=>$request->date,
                'schedule_date'=>date('Y-m-d',strtotime($request->schedule_date)),
                'details'=>$request->details,
                // 'starting_time'=>$request->starting_time,
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
                    'schedule_date'=>date('Y-m-d',strtotime($request->schedule_date.' '.$i.' days')),
                    'details'=>$request->details,
                    // 'starting_time'=>$request->starting_time,
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
                    'schedule_date'=>date('Y-m-d',strtotime($request->schedule_date.' '.$i+1 .' days')),
                    'details'=>$request->details,
                    // 'starting_time'=>$request->starting_time,
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

        $demand_details= DemandMedicine::with('medicine')->find($demand_details_id);

    
// dd($schedule);
        $time=MachineMedicine::where('medicine_id',$demand_details->medicine_id)
                    ->where('machine_id',$schedule[0]->machine_id)->first();
                    // dd($time);
        
        return view('admin.scheduling.scheduling_details',compact('schedule','demand_details','time'));
    }
    public function generatePdf($demand_details_id)
    {

        $schedule= Schedule::with('machine')->where('demand_details_id',$demand_details_id)->get();

        $demand_details= DemandMedicine::with('medicine')->find($demand_details_id);

    
// dd($schedule);
        $time=MachineMedicine::where('medicine_id',$demand_details->medicine_id)
                    ->where('machine_id',$schedule[0]->machine_id)->first();
        // $schedule= Schedule::with('machine')->get();
        // $demand_details= DemandMedicine::with('medicine')->find($demand_details_id);

        // dd($schedule);
        $data = [
            'title' => 'Welcome to MPDBMS',
            'date' => date('m/d/Y'),
            'schedule'=>$schedule
        ];

        $pdf = app('dompdf.wrapper', $data);
        $pdf->loadView('admin.scheduling.pdf', compact('schedule','data', 'demand_details', 'time'));
          

        // $pdf = PDF::loadView('scheduling_details', $data);
    
        return $pdf->download('MPDBMS.pdf');
    }

    public function search(Request $request){
        // dd($request->all());
        $status = "yes";
        if ($request->medicine_id == 0) {
            $results = Schedule::whereBetween('schedule_date',[$request->from_date,$request->To_date])->get();
            return view('admin.scheduling.scheduling',compact('results','status'));
        }
        if($request->medicine_id !=0){
            $medicine_id = $request->medicine_id;
            $results = Schedule::whereBetween('schedule_date',[$request->from_date,$request->To_date])
                                ->with('demandDetails',function($query) use ($medicine_id){
                        $query->where('medicine_id','LIKE','%'.$medicine_id.'%');
                    })->get();
            return view('admin.scheduling.scheduling',compact('results','status'));
                        
        }
    }
}


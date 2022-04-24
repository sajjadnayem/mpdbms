<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Machine;
use App\Models\MachineMedicine;
use App\Models\Medicine;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function machine()
    {
        $machine=Machine::with('medicine')->get();
        return view('admin.pages.machine.machine',compact('machine'));
    }
    public function createMachine()
   {
       $medicine= Medicine::all();
       return view('admin.pages.machine.create_machine', compact('medicine'));
   }
   public function StoreMachine(Request $request)
   {
        // dd($request->all());
        // for validation
        $request->validate([
            'name'=>'required',
            'machine_rpm'=>'required',
        ]);
        //for creating machine 
     $machine=Machine::create([
        'name'=>$request->name,
        'machine_rpm'=>$request->machine_rpm,
        'rpm_quantity'=>$request->rpm_quantity,
        'details'=>$request->details
       ]);

        foreach ($request->medicine_name as $name) {
            MachineMedicine::create([
                'machine_id'=>$machine->id,
                'medicine_id'=>$name,
                'quantity'=>$request->quantity
            ]);
        }
        Toastr::success('Machine created successfully ','Success');
        return redirect()->route('machine');
   }
}


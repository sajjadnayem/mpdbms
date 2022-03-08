<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use App\Models\DemandDetails;
use App\Models\DemandMedicine;
use App\Models\Medicine;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class DemandController extends Controller
{
    public function demand()
    {
        // $madicine_name = json_decode($request->medicine_name);
        $demand = Demand::all();

        $madicine_name = $demand->pluck('medicine_name')->toArray();

        return view('admin.pages.demand.demand', compact('demand'));
    }
    public function createDemand()
    {
        $medicine = Medicine::all();
        return view('admin.pages.demand.create_demand', compact('medicine'));
    }
    public function storeDemand(Request $request)
    {
        // dd($request->all());
        // $madicine_name = json_encode($request->medicine_name);
        // dd($madicine_name);
        $demand = Demand::create([
            'name'=>$request->name,
            'from_date'=>$request->from_date,
            'to_date'=>$request->to_date,

        ]);

        foreach($request->medicine_name as $medicine_id){
            $demandmedicine = DemandMedicine::create([
                'demand_id'=> $demand->id,
                'medicine_id'=> $medicine_id
            ]);

            DemandDetails::create([
                'demand_id'=>$demand->id,
                'demandmedicine_id'=> $demandmedicine->id,
                'details'=>$request->details,
                'quantity'=>$request->quantity
            ]);
        }
        Toastr::success('Demand created successfully', 'demand');
        return redirect()->route('demand');

    }
    public function demandDetails($demand_id)
    {
        $demand = DemandDetails::with('demandmedicine')->where('demand_id',$demand_id)->get();
        return view('admin.pages.demand.demand_details', compact('demand'));
    }
}

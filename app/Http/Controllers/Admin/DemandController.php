<?php

namespace App\Http\Controllers\Admin;

use App\Models\Demand;
use App\Models\Medicine;
use App\Models\Schedule;
use MongoDB\Driver\Session;
use Illuminate\Http\Request;
use App\Models\DemandDetails;
use App\Models\DemandMedicine;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

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
        $cart = \session()->get('cart');
        return view('admin.pages.demand.create_demand', compact('medicine','cart'));
    }

    public function demandAdd(Request $request)
    {
        $medicine = Medicine::find($request->medicine);
        // checking the cart
        $cart = \session()->has('cart') ? \session()->get('cart') : [];
        // adding to the cart
        if (array_key_exists($medicine->id,$cart)){
            $cart[$medicine->id]['quantity']=$cart[$medicine->id]['quantity']+$request->quantity;
        }
        else{
            $cart[$medicine->id]=[
                'medicine_id' =>$medicine->id,
                'name'=> $medicine->name,
                'quantity'=>$request->quantity
            ];
        }
        \session(['cart'=>$cart]);
        return redirect()->back();

    }

    public function updateDemand(Request $request,$id)
    {
//        dd($request->all(),$id);
        $cart = \session()->get('cart');
        $cart[$id]['quantity']=$request->quantity;
        \session()->put('cart',$cart);
        return redirect()->back();

    }

    public function deleteDemand($id)
    {
        $cart = \session('cart');
        unset($cart[$id]);
        \session()->put('cart',$cart);
        return redirect()->back();
    }

    public function forgotDemand()
    {
      \session()->forget('cart');
      return redirect()->back();
    }

    public function storeDemand(Request $request)
    {
        
        // dd($request->all(),session('cart'));
        $carts = session()->get('cart');
        // $madicine_name = json_encode($request->medicine_name);
        // dd($madicine_name);
        $demand = Demand::create([
            'user_id'=>auth()->user()->id,
            'from_date'=>$request->from_date,
            'to_date'=>$request->to_date,
            'note'=>$request->note,
        ]);

        foreach($carts as $cart){
            $demandmedicine = DemandMedicine::create([
                'demand_id'=> $demand->id,
                'medicine_id'=> $cart['medicine_id'],
                'quantity'=>$cart['quantity'],
            ]);
        }
        Toastr::success('Demand created successfully', 'demand');
        return redirect()->route('demand');

    }
    public function demandDetails($demand_id)
    {
        $demand = DemandMedicine::with('medicine')->where('demand_id',$demand_id)->get();
        // dd($demand);
        return view('admin.pages.demand.demand_details', compact('demand'));
    }
    public function printSchedule()
    {
        // dd($schedule_id->all());
        // $schedule= Schedule::find($schedule_id); // finding particular schedule
        //  // dd($schedule);
        // $demand = Demand::where('id',$schedule->demand_id)->first();
        // // dd($demand);
        // return view('admin.scheduling.scheduling_details',compact('schedule','demand'));
    }
}

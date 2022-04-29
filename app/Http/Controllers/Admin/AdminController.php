<?php

namespace App\Http\Controllers\Admin;

use App\Models\Demand;
use App\Models\Generic;
use App\Models\Machine;
use App\Models\Category;
use App\Models\Medicine;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AdminController extends Controller
{
    public function dashboard()
    {
        $medicine=Medicine::all();
        $machine=Machine::all();
        $demand=Demand::all();
        $schedule=Schedule::all();
        return view('admin.pages.dashboard.dashboard',compact('medicine', 'machine', 'demand', 'schedule'));
    }
   public function medicine()
   {
       $medicine=Medicine::all();
       return view('admin.pages.medicine', compact('medicine'));
   }
   public function CreateMedicine()
   {
       $category=Category::all();
       $generic=Generic::all();
       return view('admin.pages.create_medicine', compact('category','generic'));
   }
   public function StoreMedicine(Request $request)
   {

    // for validation
    $request->validate([
        'name'=>'required',
        'category'=>'required',
        'generic'=>'required',
    ]);
    //    dd($request->all());
    $image_name=null;
    if($request->hasfile('medicine_image'))
    {
        $image_name=date('Ymdhis').'.'.$request->file('medicine_image')->getClientOriginalExtension();
        // dd($image_name);
        $request->file('medicine_image')->storeAs('/uploads/medicine',$image_name);

    }
    //    dd($request->all());
       Medicine::create([
           'name'=>$request->name,
           'category_id'=>$request->category,
           'generic_id'=>$request->generic,
           'details'=>$request->details,
           'image'=>$image_name,
       ]);
       Toastr::success('Medicine Created successfully','Success');
       return redirect()->route('medicine');
   }
   public function viewMedicine($medicine_id)
   {
       $medicine = Medicine::find($medicine_id);
       return view('admin.pages.view_medicine_details', compact('medicine'));
   }
   public function editMedicine($medicine_id)
   {
       $medicine = Medicine::find($medicine_id);
       $categorylist=Category::all();
       $genericlist = Generic::all();
       return view('admin.pages.edit_medicine', compact('medicine', 'categorylist', 'genericlist'));
   }
   public function updateMedicine(Request $request, $medicine_id)
   {
       $medicine = Medicine::find($medicine_id);
        $image_name=null;
        if($request->hasfile('medicine_image'))
        {
            $image_name=date('Ymdhis').'.'.$request->file('medicine_image')->getClientOriginalExtension();
            // dd($image_name);
            $request->file('medicine_image')->storeAs('/uploads/medicine',$image_name);

        }
    //    dd($request->all());
       $medicine->update([
           'name'=>$request->name,
           'category_id'=>$request->category,
           'generic_id'=>$request->generic,
           'details'=>$request->details,
           'image'=>$image_name,
       ]);
       Toastr::info('Medicine updated successfully :)','Info');
       return redirect()->route('medicine');
   }
   public function deleteMedicine($medicine_id)
   {
       Medicine::find($medicine_id)->delete();
       Toastr::warning('Medicine has been deleted','Warning');
       return redirect()->route('medicine');
   }
}

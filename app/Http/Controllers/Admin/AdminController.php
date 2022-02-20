<?php

namespace App\Http\Controllers\Admin;

use App\Models\Generic;
use App\Models\Category;
use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AdminController extends Controller
{
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
       Toastr::success('Medicine Created successfully :)','Success');
       return redirect()->back()->with('success','Medicine has been created successfully.');
   }
}

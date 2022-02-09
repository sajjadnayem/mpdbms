<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Generic;
use App\Models\Medicine;
use Illuminate\Http\Request;

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
       Medicine::create([
           'name'=>$request->name,
           'category_id'=>$request->category,
           'generic_id'=>$request->generic,
           'details'=>$request->details
       ]);
       return redirect()->back()->with('success','Medicine has been created successfully.');
   }
}

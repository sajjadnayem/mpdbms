<?php

namespace App\Http\Controllers\Admin;

use App\Models\Generic;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    public function category()
    {
        $category=Category::all();
        return view('admin.pages.category', compact('category'));
    }
    public function CreateCategory()
    {
        return view('admin.pages.create_category');
    }
    public function StoreCategory(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name'=>'required',
            'details'=>'required',
        ]);
        Category::create([
            'name'=>$request->name,
            'details'=>$request->details,
        ]);
        return redirect()->route('category')->with(Toastr::success('Category Created successfully','Success'));
    }
    public function editCategory($category_id)
    {
        $category=Category::find($category_id);
        return view('admin.pages.edit_category',compact('category'));
    }
    public function updateCategory(Request $request,$category_id)
    {
        $category=Category::find($category_id);
        $category->update([
            'name'=>$request->name,
            'details'=>$request->details,
        ]);
        return redirect()->route('category')->with(Toastr::info('Category Updated successfully','Info'));
    }
    public function deleteCategory($category_id)
    {
        Category::find($category_id)->delete();
        return redirect()->back()->with(Toastr::danger('Category has been deletd','Danger'));
    }
    public function generic()
    {
        $generic=Generic::all();
        return view('admin.pages.generic', compact('generic'));
    }
    public function Creategeneric()
    {
        return view('admin.pages.create_generic');
    }
    public function StoreGeneric(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'details'=>'required',
        ]);
        Generic::create([
            'name'=>$request->name,
            'details'=>$request->details
        ]);
        return redirect()->route('generic')->with(Toastr::success('Generic created successfully','Success'));
    }
    public function editGeneric($generic_id)
    {
        $generic=Generic::find($generic_id);
        return view('admin.pages.generic_edit', compact('generic'));
    }
    public function updateGeneric(Request $request,$generic_id)
    {
        $generic=Generic::find($generic_id);
        $generic->update([
            'name'=>$request->name,
            'details'=>$request->details,
        ]);
        return redirect()->route('generic')->with(Toastr::info('Generic Updated successfully','Info'));
    }
    public function deleteGeneric($generic_id)
    {
        Generic::find($generic_id)->delete();
        return redirect()->back()->with(Toastr::warning('Generic has been deleted','Warning'));
    }
}

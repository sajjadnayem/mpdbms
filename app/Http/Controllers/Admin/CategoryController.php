<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Generic;
use Illuminate\Http\Request;

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
        return redirect()->route('category')->with('success','Category has been created');
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
        return redirect()->route('category')->with('success','Category Updated Successfully.');
    }
    public function deleteCategory($category_id)
    {
        Category::find($category_id)->delete();
        return redirect()->back()->with('danger',"Cause has been deleted.");
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
        return redirect()->route('generic')->with('success', 'Generic has been created.');
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
        return redirect()->route('generic')->with('success','Generic Updated Successfully.');
    }
    public function deleteGeneric($generic_id)
    {
        Generic::find($generic_id)->delete();
        return redirect()->back()->with('danger',"Generic has been deleted.");
    }
}

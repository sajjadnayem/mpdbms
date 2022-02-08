<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function category()
    {
        return view('admin.pages.category');
    }
    public function CreateCategory()
    {
        return view('admin.pages.create_category');
    }
}

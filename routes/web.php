<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master');
});
// Route::get('/admin/login', [AdminController::class, 'login']);
//for category
Route::get('/category', [AdminController::class, 'category'])->name('category');
Route::get('/create/category', [AdminController::class, 'CreateCategory'])->name('category.create');


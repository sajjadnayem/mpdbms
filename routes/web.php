<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
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
//for category controller
Route::get('/category', [CategoryController::class, 'category'])->name('category');
Route::get('/create/category', [CategoryController::class, 'CreateCategory'])->name('category.create');
Route::post('/store/category', [CategoryController::class, 'StoreCategory'])->name('store.category');
Route::get('/category/edit/{category_id}',[CategoryController::class,'editCategory'])->name('edit.category');
Route::put('/category/update/{category_id}',[CategoryController::class,'updateCategory'])->name('update.category');
Route::get('/category/delete/{category_id}',[CategoryController::class,'deleteCategory'])->name('delete.category');

//for generic
Route::get('/generic', [CategoryController::class, 'generic'])->name('generic');
Route::get('/create/generic', [CategoryController::class, 'Creategeneric'])->name('generic.create');
Route::post('/store/generic', [CategoryController::class, 'StoreGeneric'])->name('generic.store');
Route::get('/generic/edit/{generic_id}',[CategoryController::class,'editGeneric'])->name('generic.edit');
Route::put('/generic/update/{generic_id}',[CategoryController::class,'updateGeneric'])->name('generic.update');
Route::get('/generic/delete/{generic_id}',[CategoryController::class,'deleteGeneric'])->name('generic.delete');

//for admincontroller
Route::get('/medicine', [AdminController::class, 'medicine'])->name('medicine');
Route::get('/create/medicine', [AdminController::class, 'CreateMedicine'])->name('medicine.create');
Route::post('/store/medicine', [AdminController::class, 'StoreMedicine'])->name('medicine.store');

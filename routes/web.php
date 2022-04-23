<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DemandController;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\Admin\MachineController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\SchedulingController;
// use Barryvdh\DomPDF\Facade as PDF;

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

Route::get('/', [HomeController::class, 'Home'])->name('manage.home');
Route::group(['prefix'=> 'user'], function(){
    Route::get('/', function(){
        return view('website.master');
    })->name('website');
});





Route::get('/admin/login', [UserController::class, 'login'])->name('admin.login');
Route::post('/admin/dologin', [UserController::class, 'dologin'])->name('admin.dologin');



Route::group(['prefix'=> 'admin', 'middleware'=>'auth'], function(){
    // Route::get('/admin.dashboard', function(){
    //     return view('admin.pages.dashboard.dashboard');
    // })->name('admin.master');

Route::get('/logout', [UserController::class, 'logout'])->name('admin.logout');
// Route::get('/', function () {
//     return view('master');
// })->name('admin.master');
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
Route::get('/view/medicine/{medicine_id}', [AdminController::class, 'viewMedicine'])->name('medicine.view');
Route::get('/edit/medicine/{medicine_id}', [AdminController::class, 'editMedicine'])->name('medicine.edit');
Route::put('/update/medicine{medicine_id}',[AdminController::class, 'updateMedicine'])->name('medicine.update');
Route::get('/delete/medicine/{medicine_id}', [AdminController::class, 'deleteMedicine'])->name('medicine.delete');

//for creating machine
Route::get('/machine', [MachineController::class, 'machine'])->name('machine');
Route::get('/create/machine/', [MachineController::class, 'createMachine'])->name('create.machine');
Route::post('/store/machine/', [MachineController::class, 'StoreMachine'])->name('machine.store');

//for demand
Route::get('/demand', [DemandController::class, 'demand'])->name('demand');
Route::get('/create/demand', [DemandController::class, 'createDemand'])->name('demand.create');
Route::get('/add/demand',[DemandController::class,'demandAdd'])->name('demand.add');
Route::post('demand/update/{demand_id}',[DemandController::class,'updateDemand'])->name('demand.update');
Route::get('/demand/delete/{demand_id}',[DemandController::class,'deleteDemand'])->name('demand.delete');
Route::get('/demand/forgot',[DemandController::class,'createdemand'])->name('demand.forgot');
Route::post('/store/demand', [DemandController::class, 'storeDemand'])->name('store.demand');
Route::get('/view/demand/details/{demand_id}', [DemandController::class, 'demandDetails'])->name('demand.view');
Route::get('/demand/details/delete/{demand_id}',[DemandController::class, 'deleteDemandDetails'])->name('demand.details.delete');

//for scheduling
Route::get('/schedule', [SchedulingController::class, 'schedule'])->name('schedule');
Route::get('/create/schedule/{demand_id}', [SchedulingController::class, 'createSchedule'])->name('schedule.create');
Route::post('/store/schedule', [SchedulingController::class, 'storeSchedule'])->name('store.schedule');
Route::get('/schedule/view/details/{demand_details_id}', [SchedulingController::class, 'printSchedule'])->name('schedule.print');
Route::post('/schedule/search', [SchedulingController::class, 'search'])->name('schedule.search');
Route::get('generate-pdf/{demand_details_id}', [SchedulingController::class, 'generatePdf'])->name('generate.pdf');
Route::get('/edit/schedule/{schedule_id}', [SchedulingController::class, 'editSchedule'])->name('schedule.edit');
Route::get('/delete/schedule/{schedule_id}', [SchedulingController::class, 'deleteSchedule'])->name('schedule.delete');

// dashboard 
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// for sending email
Route::get('/send-email', [MailController::class, 'sendEmail']);  

//for creating user
Route::get('/user', [UserController::class, 'user'])->name('user');
Route::get('/user/create', [UserController::class, 'createUser'])->name('user.create');
Route::post('/user/store', [UserController::class, 'storeUser'])->name('user.store');
});




Route::group(['prefix'=> 'user', 'middleware'=>['user', 'auth']], function(){
//for demand
Route::get('/demand', [DemandController::class, 'demand'])->name('demand');
Route::get('/create/demand', [DemandController::class, 'createDemand'])->name('demand.create');
Route::get('/add/demand',[DemandController::class,'demandAdd'])->name('demand.add');
Route::post('demand/update/{demand_id}',[DemandController::class,'updateDemand'])->name('demand.update');
Route::get('/demand/delete/{demand_id}',[DemandController::class,'deleteDemand'])->name('demand.delete');
Route::get('/demand/forgot',[DemandController::class,'createdemand'])->name('demand.forgot');
Route::post('/store/demand', [DemandController::class, 'storeDemand'])->name('store.demand');
Route::get('/view/demand/details/{demand_id}', [DemandController::class, 'demandDetails'])->name('demand.view');

//for scheduling
Route::get('/schedule', [SchedulingController::class, 'schedule'])->name('schedule');
Route::get('/create/schedule/{demand_id}', [SchedulingController::class, 'createSchedule'])->name('schedule.create');
Route::post('/store/schedule', [SchedulingController::class, 'storeSchedule'])->name('store.schedule');
Route::get('/schedule/view/details/{demand_details_id}', [SchedulingController::class, 'printSchedule'])->name('schedule.print');
Route::post('/schedule/search', [SchedulingController::class, 'search'])->name('schedule.search');
Route::get('generate-pdf/{demand_details_id}', [SchedulingController::class, 'generatePdf'])->name('generate.pdf');

// for sending mail
// Route::get('/send-email', [MailController::class, 'sendEmail']);  
}); 
 

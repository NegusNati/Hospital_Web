<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/',[HomeController::class,'index']);



Route::POST('/upload_doctor',[AdminController::class,'upload']);

Route::POST('/upload_nurse',[AdminController::class,'upload']);

Route::POST('/upload_other',[AdminController::class,'upload']);

Route::POST('/upload_patient',[AdminController::class,'uploadPatient']);

Route::get('/add_nurse_view',[AdminController::class,'addnurse']);

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::get('/add_patient_view',[AdminController::class,'addpatient']);

Route::get('/add_other_view',[AdminController::class,'addother']);

Route::get('/view_employee',[AdminController::class,'viewEmployee']);

Route::get('/view_patient',[AdminController::class,'viewPatient']);

Route::get('/about',[HomeController::class,'viewAbout']); 

Route::get('/doc_view',[HomeController::class,'viewDoc']); 

Route::get('/delete_record/{id}',[AdminController::class,'deleteEmployee']);


Route::get('/delete_patient_record/{id}',[AdminController::class,'deletePatient']);

Route::get('/update_record/{id}',[AdminController::class,'updateEmployee']);

Route::get('/update_patient_record/{id}',[AdminController::class,'updatePatient']);

Route::POST('/edit_employee/{id}',[AdminController::class,'editEmployee']); 

Route::POST('/edit_patient/{id}',[AdminController::class,'editPatient']); 

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified'); 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

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

Route::POST('/add_patient_view',[AdminController::class,'addpatient']);

Route::POST('/add_other_view',[AdminController::class,'addother']);

Route::POST('/upload_doctor',[AdminController::class,'upload']);

Route::get('/add_nurse_view',[AdminController::class,'addnurse']);

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

<?php

namespace App\Http\Controllers;

use App\Models\EmployeeTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;
use App\Notification\SendEmailVerificationNotification;

class HomeController extends Controller
{
    public function redirect ()
    {
        if(Auth::id()){
            if(Auth::user()->user_type =='0'){
                $doctor = EmployeeTable::all(); 
                return view('user.home',compact('doctor'));
            }else{
                return view('admin.home');
            }

        
        }    else {
            return redirect()->back();
        }
    }
     public function index(){
    //  {
         if(Auth::id()){
            $doctor = EmployeeTable::all();
            return view('user.home', compact('doctor'));

         } else{
            return redirect('home');
         }
        
     } 
     public function viewAbout()
     {

            return view('user.about_us');
 
     } 
     public function viewDoc()
     {
         if(Auth::id()){
            $doctor = EmployeeTable::all();
            return view('user.doctor_view', compact('doctor'));
       
         } else{
            return redirect('home');
         }
        
     } 
}

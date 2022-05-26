<?php

namespace App\Http\Controllers;

use App\Models\EmployeeTable;
use App\Models\Patient;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }
    public function addpatient()
    {
        return view('admin.add_patient');
    }
    public function addnurse()
    {
        return view('admin.add_nurse');
    }
    public function addother()
    {
        return view('admin.add_other');
    }
    public function viewEmployee()
    {
        $data = EmployeeTable::all();
        return view('admin.view_employee', compact('data'));
    }
   
   
    public function upload(Request $request)
    {
        $emp = new EmployeeTable;
        
        $image = $request->file;
        $imagename =time().'.'.$image->getClientoriginalExtension();

        $request->file->move('employeeimage',$imagename);

        $emp->image = $imagename;

        $emp->name = $request->name;
        $emp->number = $request->number;
        $emp->speciality = $request->speciality;
        $emp->age = $request->age;
        $emp->sex = $request->sex;
        $emp->availability = $request->availability;
        $emp->role = $request->role;
        $emp->emp_id = $request->id;
        $emp->salary = $request->salary;
        $emp->date = $request->date;
        

        $emp->save();

        return redirect()->back()->with('message','Data Added successfully!');

    }

    public function uploadPatient(Request $request)
    {
        $patient = new Patient;
   

        $patient->name = $request->name;
        $patient->number = $request->number;
        $patient->age = $request->age;
        $patient->sex = $request->sex;
        $patient->status = $request->stat;
        $patient->p_id = $request->id;
        $patient->money_due = $request->money;
        $patient->date = $request->date;
        $patient->time = $request->time;
        $patient->history = $request->history;

        $patient->save();

        return redirect()->back()->with('message','Data Added successfully!');

    }



}

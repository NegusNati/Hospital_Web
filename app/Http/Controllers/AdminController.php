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
    
    public function viewPatient()
    {
        $data = Patient::all();
        return view('admin.view_patient', compact('data'));
    }
    public function viewEmployee()
    {
        $data = EmployeeTable::all();
        return view('admin.view_employee', compact('data'));
    }
    public function deleteEmployee($id)
    {
        $data = EmployeeTable::find($id);

        $data->delete();

        return redirect()->back();
    }
    public function deletePatient($id)
    {
        $data = Patient::find($id);

        $data->delete();

        return redirect()->back();
    }
    public function updateEmployee($id)
    {
        $data = EmployeeTable::find($id);

        return view('admin.update_employee',compact('data'));
    } 
    public function updatePatient($id)
    {
        $data = Patient::find($id);

        return view('admin.update_patient',compact('data'));
    } 
    public function editEmployee(Request $request, $id)
    {
        $data = EmployeeTable::find($id);

        $data->name = $request->name;
        $data->number = $request->number;
        $data->speciality = $request->speciality;
        $data->age = $request->age;
        $data->availability = $request->availability;
        $data->role = $request->role;
        $data->emp_id = $request->id;
        $data->salary = $request->salary;
        $image = $request->file;
        if($image){

        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('employeeimage', $imagename);
       
        $data->image = $imagename;
        }

        $data->save();

        return redirect()->back()->with('message','Employee Data Updated successfully!');
    } 
    public function editPatient(Request $request, $id)
    {
        $data = Patient::find($id);

        $data->name = $request->name;
        $data->number = $request->number;
        $data->age = $request->age;
        $data->status = $request->status;
        $data->p_id = $request->id;
        $data->money_due = $request->money;
        $data->history = $request->history;
      

        $data->save();

        return redirect()->back()->with('message','Patient Data Updated successfully!');
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

        return redirect()->back()->with('message',' Employe Data Added successfully!');

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

        return redirect()->back()->with('message','Patient Data Added successfully!');

    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Department;
use App\Classes;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }
    public function create()
    {
        $departments = Department::all();
        $class = Classes::all();
        return view('student.create', compact('departments', 'class'));
    }
    public function save(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'faname' => 'required',
            'email' => 'required',
            'mobile' => 'required|max:255',
            'Address' => 'required',
            'department' => 'required',
            'classes' => 'required',
            'Role' => 'required',
            'reg' => 'required'
        ]);
        Student::create([
            'name' => $request->name,
            'faname' => $request->faname,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'Address' => $request->Address,
            'department' => $request->department,
            'classes' => $request->classes,
            'Role' => $request->Role,
            'reg' => $request->reg,
        ]);
        return redirect()->back()->with('status', 'Student Successfully Saved');
    }
    public function edit($id)
    {
        $students = Student::find($id);
        $departments = Department::all();
        $class = Classes::all();

        return view('student.edit', compact('students', 'departments', 'class'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $student = Student::find($id);

        $student-> update($request->all());

        return redirect()->back()->with('status', 'Student successfully updated');
    }

    public function delete($id)
    {
        $data = Student::find($id);
        $data->delete();

        return redirect()->back()->with('status', 'Student record deleted');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    //

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'class' => 'required|string|max:20',
            'roll_no' => 'required|integer|unique:students,roll_no',
        ]);
        Student::create($validatedData);
        return redirect('admin/students');
    }


    public function index()
    {
        $students = Student::all();
        return view('admin.students.index', compact('students'));
    }

    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return redirect('admin/students')->with('success', 'Student updated successfully!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->back()->with('success', 'Student deleted successfully');
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function getStudentByClass($class)
    {

        $students = Student::where('class', $class)->get();
        return view('admin.students.index', compact('students'));
    }


    public function edit(Student $student)
    {
       
        return view('admin.students.edit', compact('student'));
    }
}

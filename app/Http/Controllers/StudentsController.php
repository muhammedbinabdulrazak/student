<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    //

    public function index()
    {;
        return view('index');
    }

    
    public function getStudentByClass($class)
    {

        $students = Student::where('class', $class)->get();
        return view('index', compact('students'));
    }

    public function getStudents(Request $request)
    {
        $students = Student::all();
        return view('student-list', compact('students'));
    }
}

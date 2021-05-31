<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {

        $students = Student::orderBy('id','DESC')->get();
        return view('students',compact('students'));
    }

    public function addStudent(Request $requst)
    {
        $student = new Student();

        $student->firstname = $requst->firstname;
        $student->lastname = $requst->lastname;
        $student->email = $requst->email;
        $student->phone = $requst->phone;
        $student->save();
        return response()->json($student);
    }
}

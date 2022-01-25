<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StudentController extends Controller 
{

    public function home()
    {
        return view('student.home');
    }

    public function enrolledSubjects()
    {
        return view('student.enrolled_subjects');
    }

    public function myProfile()
    {
        return view('student.profile');
    }

    public function grades()
    {
        return view('student.grades');
    }
}
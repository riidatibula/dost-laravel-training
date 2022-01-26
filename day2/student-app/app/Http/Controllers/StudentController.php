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
        $student_info = [
            'name' => 'Augusta Ada King-Noel',
            'student_id' => '444-212',
            'year_level' => 2,
            'course' => 'BS Mathematics',
            'birth_date' => 'December 10, 1815',
            'address' => 'London, United Kingdom',
            'email' => 'ada@gmail.com',
            'phone' => '09972123211'
        ];

        return view('student.profile', [
            'student_info' => $student_info
        ]);
    }

    public function grades()
    {
        return view('student.grades');
    }
}
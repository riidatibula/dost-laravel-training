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
        $subjects = [
            [
                'name' => 'Differential Equations',
                'schedule' => 'MWF',
                'time' => '8:00AM-9:30AM',
                'room' => 'Room 101',
                'instructor' => 'John Doe'
            ],
            [
                'name' => 'Coding and Number Theory',
                'schedule' => 'TF',
                'time' => '8:00AM-9:30AM',
                'room' => 'Room 203',
                'instructor' => 'Jane'
            ],
            [
                'name' => 'Discrete Geometry and Combinatorics',
                'schedule' => 'W',
                'time' => '1:00PM-02:30PM',
                'room' => 'TBA',
                'instructor' => 'Charles'
            ],
            [
                'name' => 'Groups, Geometry, and Representations',
                'schedule' => 'MWF',
                'time' => '9:30AM-10:30AM',
                'room' => 'TBA',
                'instructor' => 'Jeremy'
            ],
            [
                'name' => 'Mathematical Finance and Actuarial Science',
                'schedule' => 'TF',
                'time' => '9:30AM-10:30AM',
                'room' => 'TBA',
                'instructor' => 'Dr. Paul'
            ]
        ]; 

        return view('student.enrolled_subjects', [
            'subjects' => $subjects
        ]);
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
        $grades = [
            [
                'subject' => 'Differential Equations',
                'mid_term' => '1.00',
                'final_term' => '1.00',
                'average' => '1.00'
            ],
            [
                'subject' => 'Coding and Number Theory',
                'mid_term' => '1.25',
                'final_term' => '1.00',
                'average' => '1.125'
            ],
            [
                'subject' => 'Discrete Geometry and Combinatorics',
                'mid_term' => '1.00',
                'final_term' => '1.00',
                'average' => '1.00'
            ],
            [
                'subject' => 'Groups, Geometry, and Representations',
                'mid_term' => '1.25',
                'final_term' => '1.00',
                'average' => '1.125'
            ],
            [
                'subject' => 'Mathematical Finance and Actuarial Science',
                'mid_term' => '1.00',
                'final_term' => '1.00',
                'average' => '1.00'
            ]
        ];

        return view('student.grades', [
            'grades' => $grades
        ]);
    }
}
<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;


use Illuminate\Http\Request;
use App\Models\Activity;


class StudentController extends Controller
{
    public function index(){
        // ddd('this is activities');

        $students = Activity::all();

        // ddd($activities);

        return view('students.index', [
            'students' => $students
        ]); 
        
    }

    public function show($id){
        
        $student = Activity::find($id);
        
        return view('students.show', [
            'student' => $student
        ]);
        
        // ddd($activity);
    }
}

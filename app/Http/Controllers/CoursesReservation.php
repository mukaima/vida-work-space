<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CoursesReservation extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        //
        return view("coursesReservation");
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // get the data 
         $data = $request->all();


         // store the data

         $course = new Course();

         $course->name = $data['name'];
         $course->phone = $data['phone'];
         $course->email = $data['email'];
         $course->course = $data['course'];
         $course->created_at = " ";
         $course->updated_at = " ";
         $course->save();
         
         return to_route('home');
    }

    
}

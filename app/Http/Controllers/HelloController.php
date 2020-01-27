<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    

    public $courses = [];
    public $teachers = ['Salman', 'Ibrahim'];

    public function about()
    {
        return view('about');
    }

    public function services()
    {
    }

    public function courses()
    {
        return view('courses', [
            'courses' => $this->courses,
            'teachers' => $this->teachers,
        ]);
    }

    public function create(Request $request)
    {
        array_push($this->courses, $request->input('course_name'));
        // return $request->input('course_name'); // name attribute
        return view('courses', [
            'courses' => $this->courses,
            'teachers' => $this->teachers,
        ]);
        
    }

}

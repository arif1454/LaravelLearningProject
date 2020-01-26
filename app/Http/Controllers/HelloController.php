<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public $services = [
        'Service 1',
        'Service 2',
        'Service 3',
        'Service 4',
    ];

    public $courses = ['Bangla', 'English'];
    public $teachers = ['Salman', 'Ibrahim'];

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services', ['services' => $this->services]); // first service is blade, second service is a variable that you want to show on service blade/page
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

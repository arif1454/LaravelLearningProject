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

    public function about()
    {
            return view('about');
    }

    public function services()
    {

            //$services = \App\Service::all();

            //dd(services);
            return view('services', compact('services')); // first service is blade, second service is a variable that you want to show on service blade/page
    }

    public function courses()
    {
        //     return view('courses', compact('courses'));
    }
}

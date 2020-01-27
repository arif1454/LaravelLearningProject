@extends('app')

@section('title', 'Courses')

@section('content')

    <h1>Welcome to Course </h1>

    <ul>
        @foreach ($b_courses as $course)
            <li>
                <form method="post" action = "/course/update/{{$course->id}}">
                    @csrf
                        {{$course->name}}
                        <input type="text" name="course_name" id="course_name" placeholder="Course Name" />
                        <button type="submit"> Update </button>
                </form>
                        <button onclick="location.href='{{ url('/course/delete/' . $course->id) }}'">Delete</button>           
            </li>
        @endforeach
    </ul>
    <form method="post" action = "/create/course">
    @csrf
        <input type="text" name="course_name" id="course_name" placeholder="Course Name" /><br/><br/>
        <button type="submit"> Add </button>
    </form>

@endsection

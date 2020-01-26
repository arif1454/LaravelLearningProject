@extends('app')

@section('title', 'Courses')

@section('content')

    <h1>Welcome to Course </h1>

    <ul>

        @foreach ($courses as $course)
            <li>{{$course}}</li>
        @endforeach


    </ul>
    <h1>Our teachers</h1>
    <ol>

        @foreach ($teachers as $teacher)
            <li>{{$teacher}}</li>
        @endforeach

    </ul>
    <form method="post" action = "/create">
        @csrf
            <input type="text" name="course_name" id="course_name" placeholder="Course Name" /><br/><br/>
            <button type="submit"> Add </button>
          </form>

@endsection

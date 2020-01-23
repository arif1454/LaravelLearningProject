@extends('app')

@section('title', 'Services')

@section('content')

    <h1>Welcome to My App Services </h1>
    <ul>
        @foreach($services as $service)
            <li>{{$service}}</li>    
        @endforeach
    </ul>

    <ul>
        @foreach($courses as $course)
            <li>{{$course}}</li>    
        @endforeach
    </ul>

@endsection
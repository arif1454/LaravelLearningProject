@extends('app')


@section('title', 'Services')

@section('content')

    <h1>Welcome to My App Services </h1>
    
    <ul>
        @foreach($blade_services as $service)
            <li>
                
                <form method="post" action = "/service/update/{{$service->id}}">
                    @csrf
                        {{$service->name}} 
                        <input type="text" name="service_name" id="service_name" placeholder="Service Name" />
                        <button type="submit"> Update </button>
                    </form>  


            </li>    
        @endforeach
    </ul>

    <form method="post" action = "/service/add">
        @csrf
            <input type="text" name="service_name" id="service_name" placeholder="Service Name" /><br/><br/>
            <button type="submit"> Add </button>
          </form>



@endsection
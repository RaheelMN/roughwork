@extends('layout.masterlayout')
@section('content')    
    @if (isset($data))
        <h2>Student Detail</h2>
        <div>
        <p> ID: {{$data->st_id}}</p>
        <p> Name: {{$data->name}}</p>
        <p> Age: {{$data->age}}</p>
        <p> City: {{$data->city}}</p>
        </div>
    @endif
@endsection
@extends('layout.masterlayout')

@php
    $name = 'raheel';
    $fruits = ['apple','banana','orange'];
    $flag = true;
@endphp

@section('content')
    <h3>Blade Template</h3>
    <p>To write php code within html laravel use blade template</p>
    <p>To insert php code with html we use double curly brackets</p>
    <p>php variable name: {{$name}}</p>
    <p>To use php methods and commands @ is used before command</p>
    
    @if ($flag)
        <p>This statment is within if condition where variable $flag = true</p>
    @endif

    <p>Below is foreach loop of fruit array</p>
    <ul> 
    @foreach ($fruits as $key)
        <li>{{$key}}</li>
    @endforeach
    </ul>
@endsection



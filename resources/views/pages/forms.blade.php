@extends('layout.masterlayout')

@section('content')
<h2>Forms</h2>
<p>Forms have two attributes method and action</p>
<p>In laravel method is post </p>
<p>Laravel server uses tokens with request therefore in response we use @ csrf</p>
<p>It prevents hackers from impersonating client</p>
<p>In route we use route::post instead of get</p>
<p>In controller function parameter we use request class</p>
<p>All form data is passed to request object</p>
@endsection
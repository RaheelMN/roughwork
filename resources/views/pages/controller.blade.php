@extends('layout.masterlayout')

@section('content')
    <h1>Controllers</h1>
    <p>In laravel controller deals with incoming requests.</p>
    <p>Request are received by route class in resources/route/web.php</p>
    <p>For given URI we can forward it to static page in resource/view folder</p>
    <p>Or forward to specific controller using route::controller('controllername::class')->group(function(){})</p>
@endsection
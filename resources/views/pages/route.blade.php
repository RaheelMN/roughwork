@extends('layout.masterlayout')

@section('content')
    <h2>Routes</h2>
    <p>Routes are of two type Static and Dynamic</p>
    <p>Static Routes are webpages whose information is not upaded</p>
    <p>Route class can return static pages to browser</p>
    <p>Dynamic pages where data in page is from database we use controller class</p>
    <p>Routes are defined in resources/routes/web.php</p>
    <h3>Static Pages</h3>
    <p>In web.php route class is used. For get method We use Route::get</p>
    <p>In get method we pass uri parameter and anonymous function</p>
    <p>In anonymous function we can write html or return folder name in which page exist</p>
    <p>ie resources/view and file name</p>
    <a href="./server_info">Server Info</a>
    <p>Routes masks actual resource from url.</p>
    <p>Browser doesnot give path actual resource ie rourses/routes/server_info.php</p>
    <p>We can Send parameters with uri using curly brackets</p>
    <a href="./get_with_parameter/raheel">Send Your name</a>
    <p>php files are stored with blade extension. Blade is template engine</p>
    <p>Instead of using <?php ?> to insert php code into html we use blade</p>
    <p>We can name url using name method ie get()->name('nameofurl')</p>
    <p>In all php files we can replace href url with {route('nameofurl')}</p>
    <h3>Dynamic Pages</h3>
    <p>To use controller class in route we add its namespace in web.php</p>
    <p>We use route::('url',[nameofcontrollerclass::class,'methodname']</p>
    <p>If we are using more than one method of particular controller class than</p>
    <p>We can group them together using route::controller(nameofcontrollerclass::class)->group(function(){</p>
    <p> route::get('uri/{parameter}','methodname')->name('mapped name of uri')}</p>
@endsection

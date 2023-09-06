<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/',[userController::class,'homepage']);
// Route::get('/users',[userController::class,'users']);
// Route::get('/user/{id}',[userController::class,'user'])->name('view.user');
// Route::get('/AboutUs',[userController::class,'about']);

//To prevent writing userController::class in each route for same class
//we use group
Route::controller(StudentController::class)->group(function(){
    Route::get('/showStudents','showStudents')->name('showStudents');
    Route::get('/studentDetail/{id}','studentDetail')->name('student');
    Route::get('/studentDelete/{id}','studentDelete')->name('studentDelete');
    Route::get('/model','model');
    Route::get( '/addStudent/{name}/{age}/{email}/{city}','addStudent');
    Route::get('/editForm/{id}','editForm');
    Route::get('/updateStudent/{id}/{name}/{age}/{email}/{city}','updateStudent');
});

Route::get('/', function () {
    return view('welcome');
});

Route::view( '/studentForm','pages.studentForm');

Route::get('/forms', function () {
    return view('pages.forms');
});

Route::get('/routes', function () {
    return view('pages.route');
})->name('route');

Route::get('/blades', function () {
    return view('pages.blade');
})->name('blade');

Route::get('/controller', function () {
    return view('pages.controller');
});

Route::get('/templates', function () {
    return view('pages.template');
})->name('template');

Route::get('/server_info',function(){
    echo "<h3>HTML coding in anonymous function</h3>";
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
});

Route::get('/get_with_parameter/{name}',function(string $name){
    echo "<h3>GET method with parameter</h3>";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    echo "Your name is $name";
});

Route::get('/getForm', function () {
    return view('basicGetForm');
});

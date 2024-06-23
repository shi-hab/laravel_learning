<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('wellcome', function () {
    return view('hello');
});

// Route::view('/','welcome');

Route::get('userinfo/{name}',function($name){
    // echo $name;
    return view('userinfo',['name'=>$name]);
});

Route::redirect('/','userinfo/shihab');


// Controller call

Route::get('usecontroller/{name}',[UserController::class,'username']);

Route::get('love',[UserController::class,'love']);

Route::get('getname/{name}',[UserController::class,'getname']);

Route::get('admin',[UserController::class,'admin']);

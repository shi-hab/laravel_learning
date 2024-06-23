<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function username($name){
        // return "Hello Shihab";

        return view('usercontroller',['name'=> $name]);
    }
    function love(){
        return "love Shihab";
    }
    function getname($name){
        return "love ". $name;
    }
    function admin(){
        return view('admin.admin');
    }
}

<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return 'Please Login First';
});

Route::get('/index',function(){
    $name = "Vickydev";
    return view('index')->with('name',$name);
});
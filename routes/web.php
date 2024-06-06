<?php

use App\Http\Controllers\NoteappController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return 'Please Login First';
});

Route::get('/index', function () {
    $name = "Vickydev";
    return view('index')->with('name', $name);
});

// Creating a route that wil handle the user note app
Route::get('/noteapp', [NoteappController::class, 'shownote']);

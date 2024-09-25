<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about', function (){
    return view('about', ['nama' => 'Samuel Berkat Hulu' ]);
});
Route::get('/home', function (){
    return view('home', ['nama' => 'Samuel Berkat Hulu']);
});

<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('home', ['pemilik' => 'Samuel Berkat Hulu']);
});
Route::get('/about', function () {
    return view('about', ['nama' => 'Samuel Berkat Hulu']);
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});

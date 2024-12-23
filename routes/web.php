<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
  return view('home', ['title' => 'Beranda']);
});

Route::get('/about', function () {
  return view('about', [
    'nama' => 'Samuel Berkat Hulu',
    'nrp' => '5025201055',
    'kelas' => 'PBKK - D',
    'title' => 'About'
  ]);
});

Route::get('/posts', function () {
  return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

  return view('post', ['title' => $post['title'], 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
  return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
  return view('posts', ['title' => count($category->posts) . ' Posts by Category: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('contact', function () {
  return view('contact', [
    'title' => 'Contact',
    'youtube' => 'https://www.youtube.com/@samuelberkathulu2596',
    'facebook' => 'https://facebook.com',
    
  ]);
});

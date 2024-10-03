<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
Use App\Models\User;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Fatiya Izzati', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});


Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single Post', 'post' => $post] );

    // return view('post', ['title' => 'Single Post']);
});

Route::get('/authors/{user}', function (User $user) {

    return view('posts', ['title' => 'Articles by' . $user->name, 'posts' => $user->posts] );

    // return view('post', ['title' => 'Single Post']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

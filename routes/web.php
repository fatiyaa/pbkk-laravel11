<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Fatiya Izzati', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        ['id' => '1',
        'title' => 'Judul Artikel 1', 
        'slug' => 'judul-artikel-1',
        'author' => 'Fatiya Izzati', 
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex suscipit magnam cumque eum, totam harum amet, qui nam nobis exercitationem voluptas. Delectus, tempore. Aspernatur consequatur optio dignissimos
            distinctio odit odio.'],
        ['id' => '2',
        'slug' => 'judul-artikel-2',
        'title' => 'Judul Artikel 2', 
        'author' => 'Fatiya Izzati', 
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum tempore doloribus ullam quis voluptatem ratione vel consequuntur. Labore enim reiciendis, exercitationem consequatur ipsa ratione expedita iste obcaecati harum quos tempore?'],
        ['id' => '3',
        'slug' => 'judul-artikel-3',
        'title' => 'Judul Artikel 3', 
        'author' => 'Fatiya Izzati', 
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quod necessitatibus voluptatibus at aut delectus sunt rem repudiandae, consequatur ex magnam nam tenetur accusamus voluptates maiores suscipit. Praesentium, sit fugiat.'],
    ]]);
});


Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        ['id' => '1',
        'slug' => 'judul-artikel-1',
        'title' => 'Judul Artikel 1', 
        'author' => 'Fatiya Izzati', 
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex suscipit magnam cumque eum, totam harum amet, qui nam nobis exercitationem voluptas. Delectus, tempore. Aspernatur consequatur optio dignissimos
            distinctio odit odio.'],
        ['id' => '2',
        'slug' => 'judul-artikel-2',
        'title' => 'Judul Artikel 2', 
        'author' => 'Fatiya Izzati', 
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum tempore doloribus ullam quis voluptatem ratione vel consequuntur. Labore enim reiciendis, exercitationem consequatur ipsa ratione expedita iste obcaecati harum quos tempore?'],
        ['id' => '3',
        'slug' => 'judul-artikel-3',
        'title' => 'Judul Artikel 3', 
        'author' => 'Fatiya Izzati', 
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quod necessitatibus voluptatibus at aut delectus sunt rem repudiandae, consequatur ex magnam nam tenetur accusamus voluptates maiores suscipit. Praesentium, sit fugiat.'],
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post] );

    // return view('post', ['title' => 'Single Post']);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return  [
            ['id' => '1',
            'title' => 'Judul Artikel 1', 
            'slug' => 'judul-artikel-1',
            'author' => 'Fatiya Izzati', 
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex suscipit magnam cumque eum, totam harum amet, qui nam nobis exercitationem voluptas. Delectus, tempore. Aspernatur consequatur optio dignissimos distinctio odit odio.'],
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
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(),fn($post) => $post['slug'] == $slug); 
        
        if(!$post){
            abort(404);
        }

        return $post;
    
    }
}
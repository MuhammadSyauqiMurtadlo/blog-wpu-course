<?php

namespace App\Models;

use Illuminate\Support\Arr;

// use Illuminate\Database\Eloquent\Model;

class Post{
    public static function all() {
         return [
        [
            'id' => 1,
            'slug' => 'judul-post-1',
            'title' => 'Judul Post 1',
            'author' => 'Muhammad Syauqi Murtadlo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum accusamus beatae dolor, recusandae ex in itaque ratione deleniti id aliquam voluptates aspernatur quod nihil at praesentium quia reiciendis! Molestias, esse.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-post-2',
            'title' => 'Judul Post 2',
            'author' => 'Kevin McAllister',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus et minima quis quibusdam impedit eaque magni obcaecati numquam earum unde facilis quasi, accusantium quam repellat recusandae autem commodi error fugiat.'
        ]
    ];
    }

    public static function find($slug) {
    return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    }
}


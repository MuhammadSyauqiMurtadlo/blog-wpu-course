<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/posts', function() {
    $posts = [
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
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
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
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    if(!$post) {
        abort(404);
    }

    return view('post', ['title' => $post['title'], 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

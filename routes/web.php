<?php

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
            'title' => 'Judul Post 1',
            'author' => 'Muhammad Syauqi Murtadlo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum accusamus beatae dolor, recusandae ex in itaque ratione deleniti id aliquam voluptates aspernatur quod nihil at praesentium quia reiciendis! Molestias, esse.'
        ],
        [
            'title' => 'Judul Post 2',
            'author' => 'Kevin McAllister',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus et minima quis quibusdam impedit eaque magni obcaecati numquam earum unde facilis quasi, accusantium quam repellat recusandae autem commodi error fugiat.'
        ]
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

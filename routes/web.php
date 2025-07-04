<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
  echo "Hey am about us Page Know";
})->name('about');

Route::get('/user/{id}/{slug}', function($id, $slug){
    echo "Welcome user :".$id . "With Slug :" . $slug;
})->name('user');


//grouping the routes

Route::group(['prefix'=> 'blog', 'as'=>'blog.'], function(){
   Route::get('/create', function(){
        echo "create blog";
   })->name('create');
   Route::get('/update', function(){
        echo "update blog";
   })->name('update');
   Route::get('/show', function(){
        echo "show blog";
   })->name('show');
});

Route::fallback(function (){
   return "Oops page not found";
});

<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);

Route::get('/about', function(){
  echo "Hey am about us Page Know";
})->name('about');

//Route::resource('blog', BlogController::class);

Route::get('/blog',function(){

    $blogs = Blog::all(); // select * from blogs
    dd($blogs);

});

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');

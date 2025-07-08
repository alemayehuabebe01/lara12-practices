<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
  echo "Hey am about us Page Know";
})->name('about');

//Route::resource('blog', BlogController::class);


Route::get('/blog',function(){

    $blogs = Blog::all(); // select * from blogs
    dd($blogs);

});

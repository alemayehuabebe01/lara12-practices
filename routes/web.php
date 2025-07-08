<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
  echo "Hey am about us Page Know";
})->name('about');

Route::resource('blog', BlogController::class);




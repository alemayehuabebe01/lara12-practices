<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileUploderController;
use App\Http\Controllers\HomeController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/about', function(){
  echo "Hey am about us Page Know";
})->name('about');

//Route::resource('blog', BlogController::class);

Route::get('/blog',function(){

    $blogs = Blog::all(); // select * from blogs
    dd($blogs);

});

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'contactStore'])->name('contact.store');

Route::get('/file-upload',[FileUploderController::class,'index'])->name('file.upload');
Route::post('/file-upload',[FileUploderController::class, 'store'])->name('file.store');
Route::get('/file-download',[FileUploderController::class, 'download'])->name('file.download');

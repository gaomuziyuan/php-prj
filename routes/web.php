<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');;
Route::view('/about', 'about')->name('about');
Route::view('/service', 'service')->name('service');
Route::get('/blog', [\App\Http\Controllers\PostController::class, 'index'])->name('blog');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::resource('posts', \App\Http\Controllers\PostController::class);
Route::resource('posts.comments', \App\Http\Controllers\CommentController::class);

//Route::get('/testResult', [\App\Http\Controllers\TestController::class, 'test']);

//Route::get('/upload', function () {
//    return view('upload');
//})->name('upload');
//Route::post('/upload', [\App\Http\Controllers\FileUploadController::class, 'store'])->name('file.upload');

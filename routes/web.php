<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/testResult', [\App\Http\Controllers\TestController::class, 'test']);

Route::get('/upload', function () {
    return view('upload');
})->name('upload');
Route::post('/upload', [\App\Http\Controllers\FileUploadController::class, 'store'])->name('file.upload');

Route::resource('posts', \App\Http\Controllers\PostController::class);
Route::resource('posts.comments', \App\Http\Controllers\CommentController::class);

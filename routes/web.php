<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Post;
use App\Http\Livewire\PostForm;
use App\Http\Livewire\PostShow;

Route::middleware(['auth'])->group(function () {
    Route::get('/home', Home::class)->name('home');
    Route::get('/posts', Post::class)->name('posts');
    Route::get('/posts/create', PostForm::class)->name('posts.create');
    Route::get('/posts/{id}', PostShow::class)->name('posts.show');
});
Route::get('/', function () {
    return view('auth.login');
});


<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\PostController;



// LISTE DES POSTS
// PATTERN: /posts
// CTRL: PostController
// ACTION: index
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// DETAILS D'UN POST
// PATTERN: /posts/post/slug
// CTRL: Posts
// ACTION: show
Route::get('/posts/{post}/{slug}', [PostController::class, 'show'])
    ->where('post', '[1-9][0-9]*')
    ->where('slug', '[a-z0-9][a-z0-9\-]*')
    ->name('posts.show');

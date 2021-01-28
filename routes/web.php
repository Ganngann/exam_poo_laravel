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
use App\Http\Controllers\WorkController;


// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: Posts
// ACTION: index
Route::get('/', [PostController::class, 'index'])->name('blog');

// LISTE DES POSTS
// PATTERN: /posts
// CTRL: PostController
// ACTION: index
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// AJAX MORE POSTS
// PATTERN: /posts/ajax/more
// CTRL: Posts
// ACTION: more
// Route::get('/posts/ajax/more/', [PostController::class, 'more'])->name('posts.ajax.more');

// DETAILS D'UN POST
// PATTERN: /posts/post/slug
// CTRL: Posts
// ACTION: show
Route::get('/posts/{post}/{slug}', [PostController::class, 'show'])
    ->where('post', '[1-9][0-9]*')
    ->where('slug', '[a-z0-9][a-z0-9\-]*')
    ->name('posts.show');


// LISTE DES WORKS
// PATTERN: /works
// CTRL: WorkController
// ACTION: index
Route::get('/works', [WorkController::class, 'index'])->name('works.index');

// DETAILS D'UN WORK
// PATTERN: /works/work/slug
// CTRL: WorkController
// ACTION: show
Route::get('/works/{work}/{slug}', [WorkController::class, 'show'])
    ->where('work', '[1-9][0-9]*')
    ->where('slug', '[a-z0-9][a-z0-9\-]*')
    ->name('works.show');



// DETAILS D'UNE PAGE
// PATTERN: /works/work/slug
// CTRL: WorkController
// ACTION: show

// CONTACT PAGE
// PATTERN: /contact
// CTRL: NA
// ACTION: NA
// Route::get('/contact', [Contacts::class, 'form'])->name('contacts.form');

Route::get('/contact', function () {return view('pages.contact');})->name('pages.contact');





// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

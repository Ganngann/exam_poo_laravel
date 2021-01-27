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

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: Posts
// ACTION: index
Route::get('/', [PostController::class, 'index'])->name('blog');

// AJAX MORE POSTS
// PATTERN: /posts/ajax/more
// CTRL: Posts
// ACTION: more
Route::get('/posts/ajax/more/', [PostController::class, 'more'])->name('posts.ajax.more');





// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

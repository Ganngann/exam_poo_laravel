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



Route::get('/dashboard', function () {
    return view('back.dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/dashboard/posts/create', [PostController::class, 'create'])->middleware(['auth'])->name('posts.create');

// Route::post('/dashboard/posts/store', [
//     'uses' => 'PostController@store'
// ]);

Route::post('/dashboard/posts/store', [PostController::class, 'store'])->name('posts.store');


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
use App\Http\Controllers\WorkController;



// AJAX MORE WORKS
// PATTERN: /works/ajax/more
// CTRL: works
// ACTION: more
Route::get('/works/ajax/more/', [workController::class, 'more'])->name('works.ajax.more');


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



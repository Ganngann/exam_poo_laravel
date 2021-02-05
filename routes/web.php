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


// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: NA
// ACTION: NA
Route::get('/', function () {
    return view('pages.home');
})->name('home');


// CONTACT PAGE
// PATTERN: /contact
// CTRL: NA
// ACTION: NA
Route::get('/contact', function () {
    return view('pages.contact');
})->name('pages.contact');


// routeurs suplémentaires
require __DIR__ . '/auth.php';
require __DIR__ . '/admin/admin.php';
require __DIR__ . '/posts.php';
require __DIR__ . '/works.php';

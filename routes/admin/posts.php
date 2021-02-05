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
  // PATTERN: /admin/posts
  // CTRL: PostController
  // ACTION: index
  Route::get('/admin/posts', [PostController::class, 'adminIndex'])->middleware(['auth'])->name('admin.posts.index');

 // AJOUT D'UN POST: FORMULAIRE
  // PATTERN: /admin/posts/add/form
  // CTRL: PostController
  // ACTION: create
  Route::get('/admin/posts/add/form', [PostController::class, 'create'])->middleware(['auth'])->name('admin.posts.create');

  // AJOUT D'UN POST: INSERT
  // PATTERN: /admin/posts/add/insert
  // CTRL: PostController
  // ACTION: store
    Route::post('/admin/posts/add/insert', [PostController::class, 'store'])->middleware(['auth'])->name('admin.posts.store');

  // EDITION D'UN POST: FORMULAIRE
  // PATTERN: /admin/posts/edit/form/x
  // CTRL: PostController
  // ACTION: edit
    Route::get('/admin/posts/edit/form/{post}', [PostController::class, 'edit'])->middleware(['auth'])->name('admin.posts.edit');

  // EDITION D'UN POST: UPDATE
  // PATTERN: /admin/posts/edit/x
  // CTRL: PostController
  // ACTION: edit
    Route::put('/admin/posts/edit/{post}', [PostController::class, 'update'])->middleware(['auth'])->name('admin.posts.update');

  // SUPPRESSION D'UN POST
  // PATTERN: /admin/posts/delete/x
  // CTRL: PostController
  // ACTION: destroy
    Route::delete('/admin/posts/delete/{post}', [PostController::class, 'destroy'])->middleware(['auth'])->name('admin.posts.destroy');


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




// Route::get('/dashboard/works/create', [WorkController::class, 'create'])->middleware(['auth'])->name('works.create');

// Route::post('/dashboard/works/store', [
//     'uses' => 'WorkController@store'
// ]);

// Route::post('/dashboard/works/store', [WorkController::class, 'store'])->name('works.store');




  // LISTE DES WORKS
  // PATTERN: /admin/works
  // CTRL: WorkController
  // ACTION: index
  Route::get('/admin/works', [WorkController::class, 'adminIndex'])->name('admin.works.index');

 // AJOUT D'UN WORK: FORMULAIRE
  // PATTERN: /admin/works/add/form
  // CTRL: WorkController
  // ACTION: create
  Route::get('/admin/works/add/form', [WorkController::class, 'create'])->name('admin.works.create');






  // AJOUT D'UN WORK: INSERT
  // PATTERN: /admin/works/add/insert
  // CTRL: WorkController
  // ACTION: store
    Route::post('/admin/works/add/insert', [WorkController::class, 'store'])->name('admin.works.store');

  // EDITION D'UN WORK: FORMULAIRE
  // PATTERN: /admin/works/edit/form/x
  // CTRL: WorkController
  // ACTION: edit
    Route::get('/admin/works/edit/form/{work}', [WorkController::class, 'edit'])->name('admin.works.edit');

  // EDITION D'UN WORK: UPDATE
  // PATTERN: /admin/works/edit/x
  // CTRL: WorkController
  // ACTION: edit
    Route::put('/admin/works/edit/{work}', [WorkController::class, 'update'])->name('admin.works.update');

  // SUPPRESSION D'UN WORK
  // PATTERN: /admin/works/delete/x
  // CTRL: WorkController
  // ACTION: destroy
    Route::delete('/admin/works/delete/{work}', [WorkController::class, 'destroy'])->name('admin.works.destroy');


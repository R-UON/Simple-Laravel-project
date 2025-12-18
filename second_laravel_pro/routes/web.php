<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/index', [UserController::class, 'index'])->name('indexx');
// Route::get('/show/{id}', [UserController::class, 'show']);
// Route::get('/create', [UserController::class, 'create'])->name('create');
// Route::post('/store', [UserController::class, 'store'])->name('store');
// Route::get('/edit/{id}', [UserController::class, 'edit']);
// Route::put('/update/{id}', [UserController::class, 'update'])->name('updatee');
// Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
Route::resource('posts', PostController::class);
// Route::post('/store', [UserController::class, 'store'])->name('store');


// Route::fallback(function () {
//     return view('');
// });

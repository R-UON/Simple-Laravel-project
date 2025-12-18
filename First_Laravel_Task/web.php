<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [UserController::class, 'index'])->name('indexx');
Route::get('/show/{id}', [UserController::class, 'show']);
Route::get('/create', [UserController::class, 'create']);
Route::post('/store', [UserController::class, 'store']);
Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::put('/update/{id}', [UserController::class, 'update'])->name('updatee');
Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
// Route::fallback(function () {
//     return view('');
// });

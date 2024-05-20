<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StudentController;

Route::get('/view', [StudentController::class, 'index'])->name('view') ->middleware('auth');
Route::get('/create',[StudentController::class,'create']) -> middleware('auth');
Route::post('/create',[StudentController::class,'store'])->name('add') -> middleware('auth');
Route::get('/delete/{id}',[StudentController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::post('/update/{id}',[StudentController::class,'update'])->name('update');

    
    
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

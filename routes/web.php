<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('', [StudentController::class, 'index'])->name('index');
Route::get('/create',[StudentController::class,'create']);
Route::post('/create',[StudentController::class,'store'])->name('add');
Route::get('/delete/{id}',[StudentController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::post('/update/{id}',[StudentController::class,'update'])->name('update');

    
    
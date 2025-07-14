<?php

use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Login');
});

Route::resource('/user', UserController::class);
// Route::post('/user', [UserController::class, 'create']); 

Route::resource('/livro', LivroController::class);
Route::get('/livro/create', [LivroController::class, 'create'])->name('livros.create');
Route::post('/livro/store', [LivroController::class, 'store'])->name('livros.store');

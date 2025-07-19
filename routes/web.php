<?php

use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Login');
});

Route::get('/livro', function () {
    return Inertia::render('Home');
});
Route::get('/edit', function () {
    return Inertia::render('EditLivro');
});



Route::resource('/user', UserController::class);
// Route::post('/user', [UserController::class, 'create']); 

Route::resource('/livro', LivroController::class);
Route::get('/livro/create', [LivroController::class, 'create'])->name('livros.create');
Route::post('/livro/store', [LivroController::class, 'store']);
Route::get('/livro/{id}/edit', [livroController::class, 'edit']);
Route::put('/livro/{id}', [livroController::class, 'update']);
Route::delete('/livro/{id}', [LivroController::class, 'destroy']);

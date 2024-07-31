<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// not working properly
// Route::resource('notes', NotesController::class);

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');

Route::get('/notes', [NotesController::class, 'index'])->name('notes.notes');
Route::get('/notes/create', [NotesController::class, 'create'])->name('notes.create');
Route::get('/notes/{note}/edit', [NotesController::class, 'edit'])->name('notes.edit');
Route::get('/notes/{note}/delete', [NotesController::class, 'delete'])->name('notes.delete');

Route::post('/notes/{note}', [NotesController::class, 'store'])->name('notes.store');
Route::put('/notes/{note}', [NotesController::class, 'update'])->name('notes.update');
Route::delete('/notes/{note}', [NotesController::class, 'destroy'])->name('notes.destroy');
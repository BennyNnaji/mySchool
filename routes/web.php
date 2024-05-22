<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\BookController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     $title = 'Dashboard';
//     return view('dashboard', compact('title'));
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('user')->middleware('auth')->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
    Route::get('/books', [BookController::class, 'list'])->name('book.list');
    Route::get('/books/add', [BookController::class, 'add'])->name('book.add');
    Route::post('/books/add', [BookController::class, 'upload'])->name('book.upload');
    Route::get('/books/view/{id}/{url}', [BookController::class, 'view'])->name('book.view');
    Route::get('/books/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
    Route::get('/books/delete/{id}', [BookController::class, 'delete'])->name('book.delete');





    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

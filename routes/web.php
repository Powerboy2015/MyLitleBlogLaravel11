<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/blog', [BlogController::class, 'Index'])->name('blogs');
Route::post('/blog', [BlogController::class, 'store'])->middleware(['auth', 'verified']);

Route::get('/blog/create', [BlogController::class, 'create'])->middleware(['auth', 'verified'])->name('blog.create');
Route::get('/blog/{id}', [BlogController::class, 'Read'])->name('blog.post');
Route::get('/', function () {
    return redirect('/blog');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

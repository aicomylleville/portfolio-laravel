<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
  ]);


Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'index')->name('blog.index');
    Route::get('/blog/{id}', 'show')->name('blog.show');
});

Route::middleware(['auth', 'user.access:admin'])->group(function () {
    // Blog
    Route::get('/blog/new/create', [AdminController::class, "blogCreate"])->name('blog.create');
    Route::post('/blog', [AdminController::class, "blogStore"])->name('blog.store');
    Route::put('/blog/{id}', [AdminController::class, "blogUpdate"])->name('blog.update');
    Route::get('/blog/{id}/edit', [AdminController::class, "blogEdit"])->name('blog.edit');
    Route::delete('/blog/{id}', [AdminController::class, "blogDestroy"])->name('blog.destroy');
});

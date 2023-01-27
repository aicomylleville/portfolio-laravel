<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/{id}', 'show')->name('home.show');
});

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact', 'mail')->name('contact.mail');
});

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
    // Home
    Route::get('/new/create', [AdminController::class, 'portfolioCreate'])->name('home.create');
    Route::post('/', [AdminController::class, 'portfolioStore'])->name('home.store');
    Route::put('/{id}', [AdminController::class, 'portfolioUpdate'])->name('home.update');
    Route::get('/{id}/edit', [AdminController::class, 'portfolioEdit'])->name('home.edit');
    Route::delete('/{id}', [AdminController::class, 'portfolioDestroy'])->name('home.destroy');

    // Blog
    Route::get('/blog/new/create', [AdminController::class, "blogCreate"])->name('blog.create');
    Route::post('/blog', [AdminController::class, "blogStore"])->name('blog.store');
    Route::put('/blog/{id}', [AdminController::class, "blogUpdate"])->name('blog.update');
    Route::get('/blog/{id}/edit', [AdminController::class, "blogEdit"])->name('blog.edit');
    Route::delete('/blog/{id}', [AdminController::class, "blogDestroy"])->name('blog.destroy');
});

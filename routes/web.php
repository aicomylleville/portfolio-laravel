<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    Route::controller(PortfolioController::class)->group(function () {
        Route::get('/portfolio/new/create', 'create')->name('portfolio.create');
        Route::post('/portfolio', 'store')->name('portfolio.store');
        Route::put('/portfolio/{id}', 'update')->name('portfolio.update');
        Route::get('/portfolio/{id}/edit', 'edit')->name('portfolio.edit');
        Route::delete('/portfolio/{id}', 'destroy')->name('portfolio.destroy');
    });

    Route::controller(BlogController::class)->group(function () {
        Route::get('/blog/new/create', 'create')->name('blog.create');
        Route::post('/blog', 'store')->name('blog.store');
        Route::put('/blog/{id}', 'update')->name('blog.update');
        Route::get('/blog/{id}/edit', 'edit')->name('blog.edit');
        Route::delete('/blog/{id}', 'destroy')->name('blog.destroy');
    });
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/{name}', 'show')->name('portfolio.show');
});
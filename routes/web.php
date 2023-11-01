<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [\App\Http\Controllers\MainController::class, 'create'])->name('profile.index');

Route::get('/pokemon', [\App\Http\Controllers\PokemonController::class, 'index'])->name('pokemon.index');

Route::post('/delete/{pokemon}', [\App\Http\Controllers\PokemonController::class, 'destroy'])->name('delete.index');

Route::post('/update/{pokemon}', [\App\Http\Controllers\UpdateController::class, 'create'])->name('update.index');
Route::post('/updated/{id}', [\App\Http\Controllers\UpdateController::class, 'update'])->name('updated.index');

Route::post('/search', [\App\Http\Controllers\PokemonController::class, 'search'])->name('search.index');

Route::post('/publish/{pokemon}', [\App\Http\Controllers\PublishController::class, 'publish'])->name('publish.index');
Route::post('/unpublish/{pokemon}', [\App\Http\Controllers\PublishController::class, 'unpublish'])->name('unpublish.index');

Route::get('/create', [\App\Http\Controllers\creationController::class, 'create'])->name('create.index');
Route::post('/create', [\App\Http\Controllers\creationController::class, 'store'])->name('create.index');

Route::get('/register', [\App\Http\Controllers\registerController::class, 'create'])->name('register.index')->middleware('guest');
Route::post('/register', [\App\Http\Controllers\registerController::class, 'store'])->name('register.index')->middleware('guest');

Route::get('/login', [\App\Http\Controllers\sessionController::class, 'create'])->name('login.index')->middleware('guest');
Route::post('/login', [\App\Http\Controllers\sessionController::class, 'store'])->name('login.index')->middleware('guest');

Route::post('/logout', [\App\Http\Controllers\sessionController::class, 'destroy'])->name('logout.index')->middleware('auth');

<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use App\Models\Tag;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('jobs.index');

Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create')->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store')->middleware('auth');


Route::get('/search', SearchController::class)->name('jobs.search');
Route::get('/tags/{tag:name}', TagController::class);


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('user.create');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('user.store');
    Route::get('/login', [SessionController::class,'create'])->name('session.create');
    Route::post('/login', [SessionController::class,'store'])->name('session.store');
});


Route::delete('/logout', [SessionController::class,'destroy'])->name('session.destroy')->middleware('auth');

<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;




Route::get('/', [JobController::class, 'index']);

Route::post('/jobs', [JobController::class, 'store']);

Route::get('/jobs/create', [JobController::class, 'create']);


Route::post('/search',SearchController::class);
Route::get('/tag/{tag:name}', TagController::class);

Route::middleware('guest')->group(function () {

    Route::get('/register', [RegisteredUserController::class, 'index']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
});


Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');

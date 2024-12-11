<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\LoginUserController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;

Route::get('/', [JobController::class, 'index']);

// Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
// Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

Route::middleware('auth')->group(function () {

    Route::get('/jobs/create', [JobController::class, 'create']);
    Route::post('/jobs', [JobController::class, 'store']);
});


Route::get('/search', SearchController::class);

Route::get('/tags/{tag:name}', TagController::class);

// Route::get('/tags/{tag:slug}', TagController::class);


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [LoginUserController::class, 'create']);
    Route::post('/login', [LoginUserController::class, 'store']);
});

Route::delete('/logout', [LoginUserController::class, 'destroy'])->middleware('auth');

<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoansController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/library', [BookController::class, 'dbOperations']);

    Route::get('/loans', [LoansController::class, 'lbOperations'])
    ->name('lbOperations');

    Route::get('/about', function(){
        return view('about');
    });

    Route::get('/book-management', function(){
        return view('book-management');
    });

    Route::get('add-to-loan/{id}', [BookController::class, 'addToLoan']);

    Route::get('/', function () {
        return view('main');
    });

    Route::resource('users', \App\Http\Controllers\UserController::class)->except(['destroy']);

    Route::get('users/{user}/destroy', [\App\Http\Controllers\UserController::class, 'destroy'])
	->name('users.destroy');
    
});

require_once __DIR__ . '/fortify.php';
Auth::routes();

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


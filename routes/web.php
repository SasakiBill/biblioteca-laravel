<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoansController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/library', [BookController::class, 'dbOperations']);

    Route::get('/loans', [LoansController::class, 'lbOperations'])->name('lbOperations');

    Route::get('/about', function(){
        return view('about');
    });

    Route::get('/book-management', function(){
        return view('book-management');
    });

    Route::get('add-to-loan/{id}', [BookController::class, 'addToLoan']);
    
});

Route::get('/', function () {
    return view('main');
});


Route::get('logout', [LoginController::class, 'logout']);

require_once __DIR__ . '/fortify.php';

<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('/library', [BookController::class, 'dbOperations']);

    Route::get('/loans', function(){
        return view('loans');
    });

    Route::get('/about', function(){
        return view('about');
    });


    Route::get('/book-management', function(){
        return view('book-management');
    });
    
});

Route::get('/', function () {
    return view('main');
});

/*Route::get('/library', function(){
    return view('library');
});*/

Route::get('add-to-loan/{id}', [BookController::class, 'addToLoan']);

Route::get('logout', [LoginController::class, 'logout']);

require_once __DIR__ . '/fortify.php';

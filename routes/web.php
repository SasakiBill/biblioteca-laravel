<?php

use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('main');
});

Route::get('/library', [BookController::class, 'dbOperations']);

/*Route::get('/library', function(){
    return view('library');
});*/






Route::get('/loans', function(){
    return view('loans');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/book-management', function(){
    return view('book-management');
});


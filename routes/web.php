<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/genre', function () {
    return view('genre_detail');
});

// Route::get('/detail', function () {
//     return view('detail');
// });
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/manage',[GenreController::class,'displayGenre']);

Route::post('/manage',[BookController::class,'insertBook']);
Route::get('/manage',[BookController::class,'showBooks']);
Route::get('/',[BookController::class,'booksHome']);
Route::get('/search',[BookController::class,'search']);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

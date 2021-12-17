<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\UserController;
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

Route::get('/layout', function () {
    return view('layout_member');
});

Route::get('/login',[UserController::class,'loginPage']);
Route::post('/login',[UserController::class,'login']);

Route::post('/insert-genre',[GenreController::class,'insertGenre']);
Route::get('/insert-genre',[GenreController::class,'displayGenre']);
Route::get('/genre-detail/{id}',[GenreController::class,'showGenreDetail']);
Route::put('/update-genre/{id}',[GenreController::class,'updateGenre']);
Route::delete('/delete-genre/{id}',[GenreController::class,'deleteGenre']);

Route::get('/book-detail/{id}',[BookController::class,'showBookDetail']);
Route::post('/manage',[BookController::class,'insertBook']);
Route::get('/manage',[BookController::class,'showBooks']);
Route::get('/',[BookController::class,'booksHome']);
Route::get('/search',[BookController::class,'search']);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

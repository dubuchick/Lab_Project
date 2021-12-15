<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BookController;
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

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/detail', function () {
//     return view('detail');
// });
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/manage',[GenreController::class,'displayGenre']);

Route::post('/manage',[BookController::class,'insertBook']);
// Route::get('',[BookController::class,'showBooks']);
Route::get('/manage',[BookController::class,'showBooks']);
Route::get('/',[BookController::class,'booksHome']);
Route::get('/search',[BookController::class,'search']);
<?php

use Illuminate\Support\Facades\Route;
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

Route::post('/books', 'BooksController@store');
Route::patch('/books/{book}', 'BooksController@update');
Route::delete('/books/{book}', 'BooksController@destroy');

Route::post('/authors', 'AuthorsController@store');

Route::post('/checkout/{book}', 'CheckoutBooksController@store')->middleware('auth');
Route::post('/checkin/{book}', 'CheckinBooksController@store')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

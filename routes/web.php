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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top', function () {
    return view('tops.top');
});

Route::get('/search', function () {
    return view('tops.search');
});

Route::get('/search_show', function () {
    return view('tops.search_show');
});

Route::get('/search_result', function () {
    return view('tops.search_result');
});


Route::get('/records_show', function () {
    return view('records.show');
});

Route::get('/records_index', function () {
    return view('records.index');
});

Route::get('/records_edit', function () {
    return view('records.edit');
});

Route::get('/records_create', function () {
    return view('records.create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<?php

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
    return view('welcome');
});

Route::get('/account/category', 'CategoryController@index');
Route::get('/account/ledger', 'LedgerController@index');

Route::post('/account/category', 'CategoryController@store');
Route::post('/account/ledger', 'LedgerController@store');
Auth::routes();
Route::get('/account', 'AccountController@index')->name('account');


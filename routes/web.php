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

<<<<<<< HEAD
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', function () {
    return view('interfaces.index');
});

Route::get('/index/category', function () {
    return view('interfaces.category');
});

Route::get('/index/ledger', function () {
    return view('interfaces.ledger');
});
=======
Route::get('/account/category', 'CategoryController@index');
Route::get('/account/ledger', 'LedgerController@index');

Route::post('/account/category', 'CategoryController@store');
Route::post('/account/ledger', 'LedgerController@store');
>>>>>>> 049a2ff61bcddf081d042fe5f65a204aacf6262d
Auth::routes();
Route::get('/account', 'AccountController@index')->name('account');


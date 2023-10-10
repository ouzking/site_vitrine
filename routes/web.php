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

Route::get('/404', function () {
    return view('404');
});

Route::get('/alerts', function () {
    return view('alerts');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/copycontent', function () {
    return view('copycontent');
});

Route::get('/datatables', function () {
    return view('datatables');
});

Route::get('/dropdowns', function () {
    return view('dropdowns');
});

Route::get('/form_advanced', function () {
    return view('from_advanced');
});

Route::get('/form_basics', function () {
    return view('form_basics');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/404', function () {
    return view('login');
});

Route::get('/404', function () {
    return view('modals');
});

Route::get('/404', function () {
    return view('popovers');
});

Route::get('/progress-bar', function () {
    return view('progress-bar');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/simples-tables', function () {
    return view('simples-tables');
});

Route::get('/ui-colors', function () {
    return view('ui-colors');
});


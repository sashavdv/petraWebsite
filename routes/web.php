<?php

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
    return view('pages.home');
});
Route::get('/schoonheid', function () {
    return view('pages.schoonheid');
});
Route::get('/divinatie', function () {
    return view('pages.divinatie');
});
Route::get('/relaxatie', function () {
    return view('pages.relaxatie');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::post('/contact', function () {
    return view('pages.contact');
});

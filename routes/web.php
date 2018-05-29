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
    return view('user.pages.home');
});
Route::get('/schoonheid', function () {
    return view('user.pages.schoonheid');
});
Route::get('/divinatie', function () {
    return view('user.pages.divinatie');
});
Route::get('/relaxatie', function () {
    return view('user.pages.relaxatie');
});
Route::get('/contact', function () {
    return view('user.pages.contact');
});
Route::post('/contact', 'ContactController@sendMail');

Route::get('/admin', function() {
    return view('admin.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin_area', ['middleware' => 'admin', function () {
    return view('admin.home');
}]);
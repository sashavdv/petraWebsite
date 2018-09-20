<?php
use App\Agenda;
use App\Http\Resources\agenda_events;
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

Route::get('/', 'WelcomeController@index')->name('home');
Route::get('/home', 'WelcomeController@index');

Route::get('/beauty', function () {
    return view('user.pages.beauty');
});
Route::get('/divination', function () {
    return view('user.pages.divination');
});
Route::get('/relaxation', function () {
    return view('user.pages.relaxation');
});
Route::get('/contact', function () {
    return view('user.pages.contact');
});
Route::get('/contact/{eventTitle}', 'ContactController@fillEventTitle');
Route::post('/contact', 'ContactController@Subscribe');

Route::get('/prices', function () {
    return view('user.pages.prices');
});

Route::get('/lang/{lang}', function ($lang) {
    Session::flash('lang', $lang);
    return redirect()->back();
});

Route::get('/admin', 'AdminController@index');
Route::get('/admin/reviews', 'AdminReviewController@index');
Route::post('/admin/reviews', 'AdminReviewController@writeReview');

Route::get('/json_events', function(){
    return agenda_events::collection(Agenda::get());
});

Auth::routes();


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
Route::post('/', 'ContactController@subscribe');
Route::post('/home', 'ContactController@subscribe');

Route::get('/beauty', function () {
    return view('user.pages.beauty', [
        'sPageTitle' => 'beauty',
    ]);
});
Route::get('/divination', function () {
    return view('user.pages.divination', [
        'sPageTitle' => 'divination',
    ]);
});
Route::get('/relaxation', function () {
    return view('user.pages.relaxation', [
        'sPageTitle' => 'relaxation',
    ]);
});
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@sendMail');

Route::get('/prices', function () {
    return view('user.pages.prices');
});

Route::get('/about', function () {
    return view('user.pages.about');
});

Route::get('/practical', function () {
    return view('user.pages.practical');
});

// ADMIN gedeelte

Route::get('/lang/{lang}', function ($lang) {
    Cookie::queue('lang', $lang, 5000);
    return redirect()->back();
});

Route::get('/admin', 'AdminController@index');
Route::get('/admin/reviews', 'AdminReviewController@index');
Route::post('/admin/reviews', 'AdminReviewController@writeReview');
Route::get('/admin/events', 'AdminEventController@index');
Route::post('/admin/events', 'AdminEventController@addEvent');

Route::get('/json_events', function(){
    return agenda_events::collection(Agenda::get());
});

Auth::routes();


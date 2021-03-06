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
Route::post('/', 'WelcomeController@popUp');
Route::post('/home', 'WelcomeController@popUp');

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
Route::get('/contact', 'ContactController@index')->name('contact');
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

Route::get('/terms', function () {
    return view('user.pages.terms');
});

Route::post('/payment', 'PaymentController@preparePayment');
Route::name('webhooks.mollie')->post('webhooks/mollie', 'PaymentController@handle');
//  Route::name('payment.succes')->post('/webhooks/mollie', 'PaymentController@handle');

Route::get('/lang/{lang}', function ($lang) {
    Cookie::queue('lang', $lang, 5000);
    return redirect()->back();
});

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index');

    Route::post('/removeParticipant', 'AdminController@removeParticipant');

    Route::get('reviews', 'AdminReviewController@index')->name('admin_reviews');
    Route::post('reviews', 'AdminReviewController@saveReview');
    Route::post('reviews/remove', 'AdminReviewController@removeReview');
    Route::get('reviews/edit/{id}', 'AdminReviewController@editReviewForm');
    Route::get('reviews/add', 'AdminReviewController@addReviewForm');

    Route::get('events', 'AdminEventController@index')->name('admin_events');
    Route::post('events', 'AdminEventController@saveEvent');
    Route::post('events/remove', 'AdminEventController@removeEvent');
    Route::get('events/edit/{id}', 'AdminEventController@editEventForm');
    Route::get('events/add', 'AdminEventController@addEventForm');

    Route::get('updatemail/send', 'ContactController@sendUpdateMail');

    Route::prefix('mail')->group(function () {
        Route::get('participants', 'AdminMailController@showParticipants');
        Route::post('participants/removeParticipant', 'AdminMailController@removeParticipant');

        Route::get('template', 'AdminMailController@showMailTemplate')->name('admin_template');
        Route::get('template/edit', 'AdminMailController@editMailTemplate');
        Route::post('template/update', 'AdminMailController@updateMailTemplate');
    });
});


Route::get('/json_events', function(){
    return agenda_events::collection(Agenda::get());
});

Auth::routes();

Route::get('logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('home');
});
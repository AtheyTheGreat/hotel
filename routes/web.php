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
    return view('pages.homepage');
});

Route::get('homepage', function () {
    return view('pages.homepage');
});
Route::get('rooms', function () {
    return view('pages.rooms');
});

Route::get('dining', function () {
    return view('pages.dining');
});

Route::get('aminities', function () {
    return view('pages.aminities');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('books', function () {
    return view('pages.books');
});

// Route::get('/contacts', function () {
//     return view('contacts');
// });

//contactmessage

Route::get('/contacts', [
    'uses' => 'ContactMessageController@create'
]);

Route::post('/contacts', [
    'uses' => 'ContactMessageController@store',
    'as' => 'contacts.store'
]);

//bookingmessage

Route::get('/bookings', [
    'uses' => 'BookingMessageController@create'
]);

Route::post('/bookings', [
    'uses' => 'BookingMessageController@store',
    'as' => 'bookings.store'
]);

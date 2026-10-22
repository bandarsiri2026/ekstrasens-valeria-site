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
    return view('master');
});
Route::get('uslugi', function () {
    return view('pages.Actualites');
});
Route::get('o-nas', function () {
    return view('pages.about-us');
});
Route::get('otzivi', function () {
    return view('pages.otzivi');
});
Route::get('contact-us', function () {
    return view('pages.contact-us');
});
Route::post('contact-us', 'MailController@send_form');
Route::post('/', 'MailController@send_form');

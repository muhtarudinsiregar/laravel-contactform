<?php
Route::group(['namespace' => 'MuhtarudinSiregar\Contactform\Http\Controllers', 'middleware' => ['web']], function () {
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@store')->name('contact');
});

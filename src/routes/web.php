<?php
Route::group(
    [
        'namespace' => 'MuhtarudinSiregar\Contactform\app\Http\Controllers', 'middleware' => ['web']
    ],
    function () {
        Route::get(config('contact.route'), 'ContactFormController@index');
        Route::post(config('contact.route'), 'ContactFormController@store')->name('contact');
    }
);

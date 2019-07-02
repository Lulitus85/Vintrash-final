<?php

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/faq', function () {

    return view('Faq.faq');
});

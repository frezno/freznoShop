<?php

//-- Home Sweet Home
Route::get('/', 'HomeController@index');

//-- Static pages, just one page per topic
Route::view('faq', 'pages.faq');
Route::view('terms', 'pages.terms');
Route::view('aboutus', 'pages.aboutus');
Route::view('privacy', 'pages.privacy');
Route::view('shipping', 'pages.shipping');
Route::view('legalinfo', 'pages.legalinfo');

//-----------------------------------------------------------------------------
//-- Authentication rulez - but disable basic registration
Auth::routes(['register' => false]);

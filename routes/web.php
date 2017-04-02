<?php

Auth::routes();

//-- Home Sweet Home
Route::get('/', 'HomeController@index');

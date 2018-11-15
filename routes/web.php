<?php

//-- Home Sweet Home
Route::get('/', 'HomeController@index');

//-----------------------------------------------------------------------------
//-- Authentication rulez - but disable basic registration
Auth::routes(['register' => false]);

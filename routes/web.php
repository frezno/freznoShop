<?php

Auth::routes();

//-- Home Sweet Home
Route::get('/', 'HomeController@index');

//-----------------------------------------------------------------------------
//-- Products
//-- Calling the categories and products by using a slug
//-- the long way would be eg:
//Route::get('{slug}', 'ProductsController@getProductsByCategorySlug')->where('slug', '[a-z0-9-/]+');
Route::pattern('slug', '[a-z0-9-/.]+');

//-- The individual product (+ children) gets called with the product/ prefix
Route::get('product/{slug}', function () { return view('shop.product_details'); });

//-- All products of a certain category will be called by just the category slug
Route::get('{slug}', 'Shop\ProductsController@getProductsByCategorySlug');

<?php 
Route::get('/productes','adminController@index');

Route::get('/insertproduct','adminController@insertproduact');

Route::put('/insert/to/db','adminController@store');
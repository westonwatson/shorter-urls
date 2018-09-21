<?php


/*
 * GET
 */
Route::get('/', 'UrlController@index')->name('index');
Route::get('/{token}', 'UrlController@search')->name('search');
Route::get('/view/{link}', 'UrlController@view')->name('view');

/*
 * POST
 */
Route::post('/create', 'UrlController@create')->name('create');

/*
 * PUT
 */


/*
 * DELETE
 */
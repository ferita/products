<?php


Route::namespace('Ferita\Products\Http\Controllers')->group(function() {
	
	Route::get('/products', 'ProductController@index')->name('products.all')->middleware('web');
	Route::get('products/create', 'ProductController@create')->name('products.create')->middleware('web');
	Route::post('products/create', 'ProductController@store')->name('products.store')->middleware('web');
	Route::get('products/{id}', 'ProductController@show')->name('products.show')->middleware('web');
	Route::get('products/edit/{id}', 'ProductController@edit')->name('products.edit')->middleware('web');
	Route::post('products/edit/{id}', 'ProductController@update')->name('products.update')->middleware('web');
	Route::get('products/delete/{id}', 'ProductController@destroy')->name('products.delete')->middleware('web');

});


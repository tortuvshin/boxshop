<?php

Route::group(['prefix' => 'admin', 'roles' => 'admin', 'middleware' => ['auth', 'roles']], function () {
   	
   	Route::get('dashboard', ['as' => '', 'uses' => 'AdminController@dashboard']);
	
	Route::get('timeline', ['as' => 'admin/timeline', 'uses' => 'AdminController@timeline']);
	
	Route::get('index', ['as' => 'admin/index', 'uses' => 'AdminController@index']);
	
	Route::get('widgets', ['as' => 'admin/widgets', 'uses' => 'AdminController@widgets']);
	
	Route::get('general', ['as' => 'admin/general', 'uses' => 'AdminController@general']);

});
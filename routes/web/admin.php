<?php
Route::get('admin/dashboard', ['as' => '', 'uses' => 'AdminController@dashboard']);
Route::get('admin/timeline', ['as' => 'admin/timeline', 'uses' => 'AdminController@timeline']);
Route::get('admin/index', ['as' => 'admin/index', 'uses' => 'AdminController@index']);
Route::get('admin/widgets', ['as' => 'admin/widgets', 'uses' => 'AdminController@widgets']);
Route::get('admin/general', ['as' => 'admin/general', 'uses' => 'AdminController@general']);


<?php

Route::get('categories', 'CategoriesController@index');

Route::group(['prefix' => 'admin', 'roles' => 'admin', 'middleware' => ['auth', 'roles']], function () {

	Route::resource('/', 'AdminController');
   	
   	Route::get('dashboard', ['as' => '', 'uses' => 'AdminController@dashboard']);
	
	Route::get('timeline', ['as' => 'admin/timeline', 'uses' => 'AdminController@timeline']);
	
	Route::get('index', ['as' => 'admin/index', 'uses' => 'AdminController@index']);
	
	Route::get('widgets', ['as' => 'admin/widgets', 'uses' => 'AdminController@widgets']);
	
	Route::get('general', ['as' => 'admin/general', 'uses' => 'AdminController@general']);

    Route::resource('category', 'CategoriesController');
    
    Route::post('category/upload', ['uses' => 'CategoriesController@upload', 'as' => 'category.upload']);
    
    Route::get('categories', ['uses' => 'CategoriesController@showList', 'as' => 'categories']);
    
    Route::resource('productsdetails', 'ProductDetailsController');
    
    Route::get('features', ['uses' => 'ProductDetailsController@index', 'as' => 'features']);
    
    Route::resource('profile', 'CompanyController');
});

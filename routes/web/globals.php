<?php

Route::get('time', ['uses' => 'TimeController@index', 'as' => 'time']);

Route::resource('times', 'TimeController');

Route::get('mycompany', ['uses' => 'AboutController@mycompany', 'as' => 'mycompany']);


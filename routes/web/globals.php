<?php

Route::get('time', ['uses' => 'TimeController@index', 'as' => 'time']);

Route::get('mycompany', ['uses' => 'AboutController@mycompany', 'as' => 'mycompany']);


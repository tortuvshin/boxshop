<?php

Route::get('time', 'TimeController@index');
Route::get('mycompany', function () {
    return view('taniltsulga/index');
});


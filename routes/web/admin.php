<?php
Route::get('dashboard', function () {
    return view('admin/dashboard');
});

Route::get('timeline', function () {
    return view('admin/timeline');
});

Route::get('index', function () {
    return view('admin/index');
});

Route::get('index2', function () {
    return view('admin/index2');
});

Route::get('widgets', function () {
    return view('admin/widgets');
});

Route::get('general', function () {
    return view('admin/general');
});

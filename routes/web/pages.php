<?php

Route::get('/about', function(){
	return view('about/index');
});

Route::get('/news', function(){
	return view('news/detail');
});
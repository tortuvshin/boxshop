<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
	return view('index');
});


//Хэрэглэгч
require __DIR__ . '/web/users.php';

//Удирдлагын хэсэг
require __DIR__ . '/web/dashboard.php';

//бараа 
require __DIR__ . '/web/products.php';

//захиалга
require __DIR__ . '/web/orders.php';

//хуудасууд
require __DIR__ . '/web/pages.php';

//цагавах
require __DIR__ . '/web/times.php';

//мэдээ лист
require __DIR__ . '/web/blog_list.php';

//бидний тухай
require __DIR__ . '/web/about.php';

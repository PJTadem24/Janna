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

Route::get('/', function () {

    return view('welcome');
})->name('index');

Route::get('/home', function () {
    return view('home');
});

//----------------------------------------------------------------------------------------------
Route::get('/basic-arithmetic/{operation}/{num1}/{num2}', function ($operation, $num1, $num2) {
	return view ('basic-arithmetic', 
				array('operation'=>$operation,
					'num1'=>$num1,
					'num2'=>$num2
					));
})->name('basic-arithmetic');

//----------------------------------------------------------------------------------------------
Route::get('/middleware/{age}', function ($age) {

	return view ('age',array('age'=>$age));
			
})->middleware('age');

//----------------------------------------
Route::get('/foo', function () {
    return view('foo');
})->name('foo');







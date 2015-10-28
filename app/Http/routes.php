<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function() {

	$id = Request::get('id',-1);
	$producto = Request::get('producto',-1);
	$precio = Request::get('precio',-1);

	DB::insert('insert into PRODUCTO (id, producto, precio) values (?, ?, ?)', [$id,$producto,$precio]);

	return view('welcome');
});
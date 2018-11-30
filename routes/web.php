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
	//dd('paja');
    return view('master');
});

Route::resource('reserva', 'ReservacionController');
/*Route::get('/reserva', function () {
    return view('reserva');
});*/

Route::get('/encontrar', function () {
    return view('encontrar');
});

Route::get('/acercade', function () {
    return view('acercade');
});
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
    return view('eventapp');
});

Route::get('/calendario', function () {
    return view('calendario');
});

Route::get('/events', function () {
    return view('eventos.index');
});


Route::get('/eventapp', function () {
    return view('eventapp');
});


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('auth/google', 'GAuthController@redirectToProvider')->name('google.login');

Route::get('auth/google/callback', 'GAuthController@handleProviderCallback');


Route::resource('eventos', 'EventoscalendarController', ['only' =>['index', 'store', 'create']]);



Route::get ( 'eventosmovil', 'EventoscalendarController@indexMovil' );



Route::get('/mapas', function () {
    return view('gmaps');
});

Route::resource('regIndex', 'regindexController');

Route::group(['middleware' => ['web']], function(){
	Route::resource('viewreg', 'RegistrosController');

});



Route::resource('/registrar','RegistrarController');
Route::get('api/v1/registros','RegistrarController@getRegistrar');

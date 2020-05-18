<?php


use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/', 'welcome')->middleware('auth');

// ItemController
Route::get('/items', 'ItemController@index');
Route::get('/items/create', 'ItemController@create');
Route::get('/items/{id}show', 'ItemController@show');
Route::post('/items/create', 'ItemController@store');
Route::get('/items/{id}/edit','ItemController@edit');
Route::patch('/items/edit/{id}/edit','ItemController@update');
Route::delete('/items/{item}/item', 'ItemController@destroy');
Route::get('/items/{id}/confirm','ItemController@confirm' )->name('items.confirm');
//Route::delete('/customers/{customer}/items', 'CustomerItemController@destroy');



//
Route::get('/parameters', 'ParameterController@index');

Route::get('/parameters/create','ParameterController@create');
Route::post('/parameters/create','ParameterController@store');

// MachineController
Route::get('/machines','MachineController@index');
Route::get('/machines/create','MachineController@create');
Route::post('/machines/create','MachineController@store');
Route::get('/machines/{id}','MachineController@show');

// Averías / Afectados / Cambios de estado en general
Route::get('/changes', 'StatusChangeController@index');
Route::get('/changes/create/{id}', 'StatusChangeController@create');
Route::post('/changes', 'StatusChangeController@store');

// Clientes
/*
Route::get('/customers', 'CustomerController@index');
Route::get('/customers/create','CustomerController@create');
Route::post('/customers/create','CustomerController@store');
Route::get('/customers/{id}/edit','CustomerController@edit');
*/

Route::Resource('clientes', 'CustomerController');

//Gerencias
Route::post('/gerencias/crear','CategoryController@store');
Route::get('/gerencias/crear','CategoryController@create');
Route::get('/gerencias/index','CategoryController@index');
Route::delete('/gerencias/{id}/gerencias', 'CategoryController@destroy');

// Asignación de items
Route::get('/customers/{customer}/items', 'CustomerItemController@index');
Route::post('/customers/{customer}/items', 'CustomerItemController@store');
Route::delete('/customers/{customer}/items', 'CustomerItemController@destroy');

// Reportes
Route::get('/reports', 'ReportController@index');
Route::get('/reports/categories/{category}', 'ReportController@byCategory');
Route::get('/reports/general', 'ReportController@general');

Route::get('/test', 'ReportController@test');



/*
Route::get('/ver_equipo/{id}', 'ReporteController@show');
Route::post('/ver_equipo/{id}/edit','ReporteController@update');
*/
/*

*/



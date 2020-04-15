<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// ItemController
Route::get('/items', 'ItemController@index');
Route::get('/items/create', 'ItemController@create');
Route::post('/items/create', 'ItemController@store');
Route::get('/items/{id}/edit','ItemController@edit');
Route::patch('/items/edit/{id}/edit','ItemController@update');

/*
Route::get('/create', 'ReporteController@create');
Route::post('/create', 'ReporteController@store');
*/

// MachineController
Route::get('/machines','MachineController@index');
Route::get('/machines/{id}','MachineController@show');
// /machines/{id}/edit
// /machines/create
/*
Route::get('/ver_reporte', 'ReporteController@index');
Route::get('/ver_equipo/{id}', 'ReporteController@show');
Route::post('/ver_equipo/{id}/edit','ReporteController@update');
*/

// Asignación de items a customers
Route::get('/contracts', 'ContractController@index');
Route::get('/contracts/create', 'ContractController@create');
Route::post('/contracts', 'ContractController@store');   // items

// Averías / Afectados / Cambios de estado en general
Route::get('/changes', 'ChangeStatusController@index');
Route::get('/changes/create', 'ChangeStatusController@create');
Route::post('/changes', 'ChangeStatusController@store');




Route::get('/customers', 'CustomerController@index'); //clientes
Route::get('/customers/create','CustomerController@create'); //clientes/crear
Route::post('/customers/create','CustomerController@store');
/*
Route::post('/gerencias/crear','CategoryController@store');
Route::get('/gerencias/crear','CategoryController@create');
*/

Route::view('/', 'welcome');
Auth::routes();

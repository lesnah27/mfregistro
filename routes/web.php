<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// ItemController
Route::get('/items', 'ItemController@index');
Route::get('/items/create', 'ItemController@create');
Route::post('/items/create', 'ItemController@store');
Route::get('/items/{id}/edit','ItemController@edit');
Route::patch('/items/edit/{id}/edit','ItemController@update');

// MachineController
Route::get('/machines','MachineController@index');
Route::get('/machines/{id}','MachineController@show');

// Contratos
Route::get('/contracts', 'ContractController@index');
Route::get('/contracts/create', 'ContractController@create');
Route::post('/contracts', 'ContractController@store');
// Detalles de los contratos
Route::get('/contracts/{contract}/details', 'ContractDetailController@index');
Route::post('/contracts/{contract}/details', 'ContractDetailController@store');
Route::delete('/contracts/{contract}/details', 'ContractDetailController@destroy');

// Averías / Afectados / Cambios de estado en general
Route::get('/changes', 'ChangeStatusController@index');
Route::get('/changes/create', 'ChangeStatusController@create');
Route::post('/changes', 'ChangeStatusController@store');

Route::get('/customers', 'CustomerController@index'); //clientes
Route::get('/customers/create','CustomerController@create'); //clientes/crear
Route::post('/customers/create','CustomerController@store');

/*
Route::get('/ver_reporte', 'ReporteController@index');
Route::get('/ver_equipo/{id}', 'ReporteController@show');
Route::post('/ver_equipo/{id}/edit','ReporteController@update');
*/
/*
Route::post('/gerencias/crear','CategoryController@store');
Route::get('/gerencias/crear','CategoryController@create');
*/

Route::view('/', 'welcome');
Auth::routes();

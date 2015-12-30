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
    return view('auth/login');
})->middleware('guest');

// Task Routes
Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');

// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('admin', function () {
    return view('layouts/admin_template');
});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require Config::get('generator.path_api_routes');

    });
});


Route::resource('empleados', 'empleadosController');

Route::get('empleados/{id}/delete', [
    'as' => 'empleados.delete',
    'uses' => 'empleadosController@destroy',
]);


Route::resource('ubicaciones', 'UbicacionesController');

Route::get('ubicaciones/{id}/delete', [
    'as' => 'ubicaciones.delete',
    'uses' => 'UbicacionesController@destroy',
]);


Route::resource('conceptos', 'ConceptosController');

Route::get('conceptos/{id}/delete', [
    'as' => 'conceptos.delete',
    'uses' => 'ConceptosController@destroy',
]);

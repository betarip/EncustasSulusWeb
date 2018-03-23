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

Route::get('/home', [
    'uses'  =>  'HomeController@index',
    'as'    =>  'home'
]);

Route::resource('encuestados', 'EncuestadoController');

Route::get('municipio/{municipio}', 'municipioController@show');
//Route::resource('encuestador', 'EncuestadorController');


//Route::get('encuestados', 'Encuestado');

// Authentication routes...


Route::get('acceso/login', [
    'uses'  =>  'Auth\AuthController@getLogin',
    'as'    =>  'login'
    ]);
Route::post('acceso/login', 'Auth\AuthController@postLogin');
Route::get('acceso/logout', [
    'uses'  =>  'Auth\AuthController@getLogout',
    'as'    =>  'logout'
    ]);

// Registration routes...


Route::group(['middleware'=> 'auth'], function(){
    Route::get('account', function(){
        return view('account');
    
    });

    Route::get('/home', [
        'uses'  =>  'HomeController@index',
        'as'    =>  'home'
    ]);

        
    Route::get('acceso/registro', [
        'uses'  =>  'Auth\AuthController@getRegister',
        'as'    =>  'registro'
        ]);

    Route::post('acceso/registro', 'Auth\AuthController@postRegister');

    Route::post('acceso/registro', 'Auth\AuthController@postRegister');
        
    Route::get('crear-encuestador', [
        'uses'  =>  'EncuestadorController@create',
        'as'    =>  'crearEncuestador']);

    Route::get('crear-encuestador', [
        'uses'  =>  'EncuestadorController@create',
        'as'    =>  'crearEncuestador']);
   
    Route::get('ver-encuestadores',[
        'as'    => 'verEncuestador',
        function () {
            $Encuestadores = App\Encuestador::orderBy('id_encuestador', 'asc')->get();
        
            return view('encuestador.encuestadores', [
            'Encuestadores' => $Encuestadores
            ]);
        }
    ]);

    Route::get('encuestadorJson', 'EncuestadorController@jsonAll');
    Route::resource('encuestador', 'EncuestadorController');
        
});
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', ['as' => 'index', 'uses' => 'MainController@index']);

Route::get('politicas', ['as' => 'politics', 'uses' => 'MainController@pia_getPolitics']);
Route::get('politicas/atraccion_de_talento', ['as' => 'politics', 'uses' => 'MainController@pia_getAttractingTalent']);

Route::get('material_grafico', ['as' => 'graphical', 'uses' => 'MainController@pia_getGraphicalMaterial']);

Route::get('sgmm', ['as' => 'sgmm', 'uses' => 'MainController@pia_getSGMM']);

Route::get('contacto', ['as' => 'contact', 'uses' => 'MainController@pia_getContact']);
Route::get('identidad', ['as' => 'company', 'uses' => 'MainController@pia_getAboutUs']);

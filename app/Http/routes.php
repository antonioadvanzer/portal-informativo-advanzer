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

// Pagina principal con el carrusel
Route::get('/', ['as' => 'index', 'uses' => 'MainController@index']);

// Politicas Advanzer
Route::get('politicas', ['as' => 'politics', 'uses' => 'MainController@pia_getPolitics']);
Route::get('politicas/atraccion_de_talento', ['as' => 'politics', 'uses' => 'MainController@pia_getAttractingTalent']);
Route::get('politicas/bono_anual_consultoria', ['as' => 'bonnus', 'uses' => 'MainController@pia_getAnnualBonus']);
Route::get('politicas/cartas_y_constancias_laborales', ['as' => 'letters', 'uses' => 'MainController@pia_getLettersAndConstancies']);
Route::get('politicas/certificaciones_y_cursos', ['as' => 'certifications', 'uses' => 'MainController@pia_getCertificationsAndCourses']);
Route::get('politicas/codigo_de_vestimenta', ['as' => 'dress', 'uses' => 'MainController@pia_getDressCode']);
Route::get('politicas/comunicacion_interna', ['as' => 'dress', 'uses' => 'MainController@pia_getInternalComunication']);
Route::get('politicas/dias_festivos', ['as' => 'days', 'uses' => 'MainController@pia_getFreeDays']);
Route::get('politicas/horarios', ['as' => 'schedules', 'uses' => 'MainController@pia_getSchedules']);
Route::get('politicas/ausencias_y_permisos', ['as' => 'absences', 'uses' => 'MainController@pia_getAbsences']);
Route::get('politicas/vacaciones', ['as' => 'holidays', 'uses' => 'MainController@pia_getHolidays']);
Route::get('politicas/viaticos_y_gastos_de_viaje', ['as' => 'travel', 'uses' => 'MainController@pia_getTravelExpenses']);

Route::get('material_grafico', ['as' => 'graphical', 'uses' => 'MainController@pia_getGraphicalMaterial']);

Route::get('sgmm', ['as' => 'sgmm', 'uses' => 'MainController@pia_getSGMM']);

Route::get('contacto', ['as' => 'contact', 'uses' => 'MainController@pia_getContact']);
Route::get('identidad', ['as' => 'company', 'uses' => 'MainController@pia_getAboutUs']);

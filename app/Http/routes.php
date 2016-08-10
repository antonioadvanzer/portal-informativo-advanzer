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

// Material Grafico
Route::get('material_grafico', ['as' => 'graphical', 'uses' => 'MainController@pia_getGraphicalMaterial']);

// SGMM
Route::get('sgmm', ['as' => 'sgmm', 'uses' => 'MainController@pia_getSGMM']);

// Contactos
Route::get('contacto', ['as' => 'contact', 'uses' => 'MainController@pia_getContact']);

// Identidad
Route::get('identidad', ['as' => 'company', 'uses' => 'MainController@pia_getAboutUs']);


// Access to Dashboard
Route::group(['prefix' => 'advanzer-admin'], function() {

    // Process to acces to dasboard
    Route::get('iniciar_sesion', ['as' => 'start', 'uses' => 'AdminController@adminLogIn']);
    Route::post('iniciar_sesion', ['as' => 'login', 'uses' => 'AdminController@adminStartSession']);
   
    Route::group(['middleware' => 'auth'], function() {

        Route::get('/', ['as' => 'main', 'uses' => 'AdminController@index']);
        Route::get('/cerrar_session', ['as' => 'end', 'uses' => 'AdminController@adminCloseSession']);
        Route::get('/usuarios', ['as' => 'users', 'uses' => 'AdminController@adminGetUsers']);
        Route::get('/nuevo_usuario', ['as' => 'user', 'uses' => 'AdminController@adminNewUserForm']);
        Route::post('/guardar_nuevo_usuario', ['as' => 'saveUser', 'uses' => 'AdminController@adminSaveNewUser']);
        Route::get('/eliminar_usuario/{id}', ['as' => 'deleteUser', 'uses' => 'AdminController@adminDeleteUser']);

    });

});
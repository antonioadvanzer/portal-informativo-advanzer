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

// Control de cuentas de usuario a traves de direcciones de correo electrónico de google
Route::get('auth/google', 'MainController@redirectToGoogle');
Route::get('auth/google/callback', 'MainController@handleGoogleCallback');

// Control al sitio a traves de la cuenta de Advanzer
Route::group(['middleware' => 'advanzer'], function() {
    
    // Pagina principal con el carrusel
    Route::get('/', ['as' => 'index', 'uses' => 'MainController@index']);

    // Politicas Advanzer
    Route::group(['prefix' => 'politicas'], function() {
        
        Route::get('', ['as' => 'politics', 'uses' => 'MainController@pia_getPolitics']);
        Route::get('/atraccion_de_talento', ['as' => 'politics', 'uses' => 'MainController@pia_getAttractingTalent']);
        Route::get('/bono_anual_consultoria', ['as' => 'bonnus', 'uses' => 'MainController@pia_getAnnualBonus']);
        Route::get('/cartas_y_constancias_laborales', ['as' => 'letters', 'uses' => 'MainController@pia_getLettersAndConstancies']);
        Route::get('/certificaciones_y_cursos', ['as' => 'certifications', 'uses' => 'MainController@pia_getCertificationsAndCourses']);
        Route::get('/codigo_de_vestimenta', ['as' => 'dress', 'uses' => 'MainController@pia_getDressCode']);
        Route::get('/comunicacion_interna', ['as' => 'people', 'uses' => 'MainController@pia_getInternalComunication']);
        Route::get('/dias_festivos', ['as' => 'days', 'uses' => 'MainController@pia_getFreeDays']);
        Route::get('/horarios', ['as' => 'schedules', 'uses' => 'MainController@pia_getSchedules']);
        Route::get('/ausencias_y_permisos', ['as' => 'absences', 'uses' => 'MainController@pia_getAbsences']);
        Route::get('/vacaciones', ['as' => 'holidays', 'uses' => 'MainController@pia_getHolidays']);
        Route::get('/viaticos_y_gastos_de_viaje', ['as' => 'travel', 'uses' => 'MainController@pia_getTravelExpenses']);

    });

    // Material Grafico
    Route::get('material_grafico', ['as' => 'graphical', 'uses' => 'MainController@pia_getGraphicalMaterial']);

    // SGMM
    Route::get('sgmm', ['as' => 'sgmm', 'uses' => 'MainController@pia_getSGMM']);

    // Contactos
    Route::group(['prefix' => 'contacto'], function() {
        Route::get('/', ['as' => 'contact', 'uses' => 'MainController@pia_getContact']);
        Route::post('contactarEmpleado', ['as' => 'sendEmail', 'uses' => 'MainController@sendMessageBackOffice']);
    });

    // Identidad
    Route::group(['prefix' => 'identidad'], function() {
        Route::get('advanzer', ['as' => 'companyA', 'uses' => 'MainController@pia_getAboutUsAdvanzer']);
        Route::get('entuizer', ['as' => 'companyE', 'uses' => 'MainController@pia_getAboutUsEntuizer']);
    });
    
    // Noticias
    Route::group(['prefix' => 'noticias'], function() {

        Route::get('/{page?}', ['as' => 'news', 'uses' => 'MainController@pia_getNews']);
        Route::get('/ver_noticia/{id}', ['as' => 'showCircular', 'uses' => 'MainController@pia_getCircular']);

    });

});

// Access to Dashboard
Route::group(['prefix' => 'advanzer-admin'], function() {

    // Process to access to dashboard
    Route::get('iniciar_sesion', ['as' => 'start', 'uses' => 'AdminController@adminLogIn']);
    Route::post('iniciar_sesion', ['as' => 'login', 'uses' => 'AdminController@adminStartSession']);
   
    Route::group(['middleware' => 'auth'], function() {

        Route::get('/', ['as' => 'main', 'uses' => 'AdminController@index']);
        Route::get('/cerrar_session', ['as' => 'end', 'uses' => 'AdminController@adminCloseSession']);
        Route::get('/usuarios', ['as' => 'users', 'uses' => 'AdminController@adminGetUsers']);
        Route::get('/nuevo_usuario', ['as' => 'user', 'uses' => 'AdminController@adminNewUserForm']);
        Route::post('/guardar_nuevo_usuario', ['as' => 'saveUser', 'uses' => 'AdminController@adminSaveNewUser']);
        Route::get('/eliminar_usuario/{id}', ['as' => 'deleteUser', 'uses' => 'AdminController@adminDeleteUser']);
        Route::get('/noticias', ['as' => 'news', 'uses' => 'AdminController@adminGetNews']);
        Route::get('/nueva_noticia', ['as' => 'circular', 'uses' => 'AdminController@adminNewCircularForm']);
        Route::post('/guardar_nueva_noticia', ['as' => 'saveCircular', 'uses' => 'AdminController@adminSaveNewCircular']);
        Route::get('/eliminar_noticia/{id}', ['as' => 'deleteCircular', 'uses' => 'AdminController@adminDeleteCircular']);
        Route::get('/editar_noticia/{id}', ['as' => 'editCircular', 'uses' => 'AdminController@adminEditCircular']);
        Route::post('/actualizar_noticia', ['as' => 'updateCircular', 'uses' => 'AdminController@adminUpdateCircular']);
        Route::get('/cambiar_estado_elemento_carrusel/{id}', ['as' => 'updateElementCarrusel', 'uses' => 'AdminController@pia_changeCircular']);
        Route::get('/elementos_carrusel_activos', ['as' => 'elementsAvaible', 'uses' => 'AdminController@adminGetElementsCarrusel']);
    });

});
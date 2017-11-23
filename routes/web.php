<?php

Route::get('/', function () {
  return redirect('home');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/home', 'HomeController@index');
    Route::resource('periodos', 'PeriodoController');
    Route::resource('carreras', 'CarreraController');
    Route::resource('universidad', 'UniversidadController');
    Route::resource('asesores-academicos', 'AsesorAcademicoController');
    Route::resource('alumnos', 'AlumnoController');
    Route::resource('empresas', 'EmpresaController');
    Route::resource('asesores-empresariales', 'AsesorEmpresarialController');
    Route::resource('proyectos', 'ProyectoController');
    Route::resource('etapas', 'EtapaController');
    Route::resource('estancias', 'EstanciaController');
    Route::resource('estadias', 'EstadiasController');
    Route::resource('cartas-presentacion', 'CartaPresentacionController');
    Route::resource('credenciales', 'CredencialController');
});

Route::get('alumnos/verificar/{token}', 'AlumnoController@verificar')->name('verificar');

// Selects
Route::get('selects/carreras', 'SelectController@carreras');
Route::get('selects/alumnos', 'SelectController@alumnos');
Route::get('selects/empresas', 'SelectController@empresas');
Route::get('selects/asesores-empresariales', 'SelectController@asesoresEmpresariales');
Route::get('selects/asesores-academicos', 'SelectController@asesoresAcademicos');
Route::get('selects/proyectos', 'SelectController@proyectos');
Route::get('selects/periodos', 'SelectController@periodos');

// Formatos
Route::get('formatos/presentacion/{id}', 'PrintController@presentacion')->name('formatos.presentacion');
Route::get('formatos/definicion/{idProyecto}', 'PrintController@definicion')->name('formatos.definicion');
Route::get('formatos/registro/{idProyecto}', 'PrintController@registro')->name('formatos.registro');

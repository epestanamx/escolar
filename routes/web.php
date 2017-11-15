<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return redirect('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('periodos', 'PeriodoController');

Route::resource('carreras', 'CarreraController');

Route::resource('universidad', 'UniversidadController');

Route::resource('asesorAcademicos', 'AsesorAcademicoController');

Route::resource('alumnos', 'AlumnoController');
Route::get('alumnos/verificar/{token}', 'AlumnoController@verificar')->name('verificar');

Route::resource('empresas', 'EmpresaController');

Route::resource('asesorEmpresarials', 'AsesorEmpresarialController');

Route::resource('proyectos', 'ProyectoController');

Route::resource('etapas', 'EtapaController');

Route::resource('estancias', 'EstanciaController');

Route::resource('estadias', 'EstadiasController');

Route::resource('cartaPresentacions', 'CartaPresentacionController');


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

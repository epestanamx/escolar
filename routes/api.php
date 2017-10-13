<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('periodos', 'PeriodoAPIController');

Route::resource('carreras', 'CarreraAPIController');

Route::resource('universidads', 'UniversidadAPIController');

Route::resource('asesor_academicos', 'AsesorAcademicoAPIController');

Route::resource('alumnos', 'AlumnoAPIController');

Route::resource('empresas', 'EmpresaAPIController');

Route::resource('asesor_empresarials', 'AsesorEmpresarialAPIController');

Route::resource('proyectos', 'ProyectoAPIController');

Route::resource('etapas', 'EtapaAPIController');

Route::resource('estancias', 'EstanciaAPIController');

Route::resource('estadias', 'EstadiasAPIController');

Route::resource('carta_presentacions', 'CartaPresentacionAPIController');
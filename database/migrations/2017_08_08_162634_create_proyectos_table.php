<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('objetivos');
            $table->text('actividades_aprendizaje');
            $table->text('resultados_aprendizaje');
            $table->text('evidencias');
            $table->text('instrumentos_evaluacion');
            $table->text('asignaturas');
            $table->text('topicos_recomendados');
            $table->text('estrategias_didacticas');

            $table->integer('idAlumno')->unsigned();
            $table->foreign('idAlumno')
                ->references('id')->on('alumnos');

            $table->integer('idEmpresa')->unsigned();
            $table->foreign('idEmpresa')
                ->references('id')->on('empresas');

            $table->integer('idAsesorEmpresarial')->unsigned();
            $table->foreign('idAsesorEmpresarial')
                ->references('id')->on('asesores_empresariales');

            $table->integer('idAsesorAcademico')->unsigned();
            $table->foreign('idAsesorAcademico')
                ->references('id')->on('asesores_academicos');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}

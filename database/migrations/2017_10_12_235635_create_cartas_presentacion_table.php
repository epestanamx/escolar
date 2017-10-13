<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartasPresentacionTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carta_presentacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idAlumno')->unsigned();
            $table->foreign('idAlumno')
                ->references('id')->on('alumnos');
            $table->integer('idEmpresa')->unsigned();
            $table->foreign('idEmpresa')
                ->references('id')->on('empresas');
            $table->integer('idPeriodo')->unsigned();
            $table->foreign('idPeriodo')
                ->references('id')->on('periodos');
            $table->string('tipo');
            $table->integer('horas');
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
        Schema::drop('carta_presentacions');
    }
}

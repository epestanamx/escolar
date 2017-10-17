<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula')->unique();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email')->nullable();
            $table->string('email_oficial');
            $table->string('telefono')->nullable();
            $table->string('nss')->nullable();
            $table->string('curp')->nullable();
            $table->string('cuatrimestre')->nullable();
            $table->string('grupo')->nullable();
            $table->string('tipo_sangre')->nullable();
            $table->string('contacto_nombres')->nullable();
            $table->string('contacto_apellidos')->nullable();
            $table->string('contacto_telefono')->nullable();
            $table->string('contacto_parentesco')->nullable();
            $table->string('contacto_direccion')->nullable();
            $table->string('password');
            $table->string('token')->nullable();
            $table->boolean('activado')->nullable();
            $table->integer('idCarrera')->unsigned();
            $table->foreign('idCarrera')
                ->references('id')->on('carreras');
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
        Schema::dropIfExists('alumnos');
    }
}

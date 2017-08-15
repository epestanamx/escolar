<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstanciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estancias', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idAlumno')->unsigned();
            $table->foreign('idAlumno')
                ->references('id')->on('alumnos');

            $table->integer('idProyecto')->unsigned();
            $table->foreign('idProyecto')
                ->references('id')->on('proyectos');

            $table->boolean('liberada')->default(false);
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
        Schema::dropIfExists('estancias');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtencionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atencions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('rut_estudiante');
            $table->string('nombre_estudiante');
            $table->string('descripcion');
            $table->string('medio');
            $table->string('nombre_asignatura');
            $table->string('nombre_profesor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atencions');
    }
}

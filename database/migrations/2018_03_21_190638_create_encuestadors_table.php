<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestadors', function (Blueprint $table) {
            $table->increments('id_encuestador');
            $table->string('password', 60);
            $table->string('nombre', 60);
            $table->string('municipio', 60);
            $table->string('app1', 60);
            $table->string('app2', 60);
            $table->string('telefono', 60);
            $table->string('cve_elector', 60);
            $table->string('curp', 18);
            $table->string('cp', 5);
            $table->string('cve_estado', 29);
            $table->string('cve_municipio', 3);
            $table->string('cve_seccion', 3);
            //indices
            $table->index('id_encuestador');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('encuestadors');
    }
}

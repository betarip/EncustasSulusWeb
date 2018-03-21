<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestados', function (Blueprint $table) {
            $table->increments('id_encuestado');
            $table->string('password', 60);
            $table->string('nombre', 60);
            $table->string('app1', 60);
            $table->string('app2', 60);
            //indices
            $table->index('id_encuestado');
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
        Schema::drop('encuestados');
    }
}

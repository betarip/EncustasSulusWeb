<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->increments('id_encuesta');
            $table->integer('fk_encuestado')->unsigned();
            $table->integer('fk_encuestador')->unsigned();
            $table->string('situacion');
            $table->string('fue_entrevistado');
            $table->string('resp1');
            $table->string('resp2');
            $table->string('resp3');
            $table->string('resp4');
            $table->string('resp5');
            $table->string('lat');
            $table->string('longi');
            $table->dateTime('hora_entrevista');
            $table->timestamps();

            $table->foreign('fk_encuestador')
                ->references('id_encuestador')->on('encuestadors');

            $table->foreign('fk_encuestado')
                ->references('id_encuestado')->on('encuestados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('encuestas');
    }
}

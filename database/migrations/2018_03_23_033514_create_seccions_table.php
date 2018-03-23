<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccions', function (Blueprint $table) {
            $table->increments('id_seccion');
            $table->integer('fk_municipio')->unsigned();
            $table->string('seccion');
            
            $table->timestamps();
            $table->foreign('fk_municipio')
                ->references('id_municipio')->on('municipios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('seccions');
    }
}

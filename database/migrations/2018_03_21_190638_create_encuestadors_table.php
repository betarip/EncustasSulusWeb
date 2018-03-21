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
            $table->string('app1', 60);
            $table->string('app2', 60);
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePonderacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ponderacion', function (Blueprint $table) {
            $table->bigIncrements('idPonderacion')->unique();

            //Llave foránea para pregunta
            $table->integer('idPregunta')->unsigned();
            $table->foreign('idPregunta')->references('idPregunta')->on('pregunta')->onDelete('cascade');

            $table->text('respuesta');
            $table->integer('valor');
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
        Schema::dropIfExists('ponderacion');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntaUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntaUsuario', function (Blueprint $table) {
            $table->bigIncrements('idPreguntaUsuario');
            
            //Llave foránea para usuario
            $table->integer('idUsuario')->unsigned();
            $table->foreign('idUsuario')->references('idUsuario')->on('usuario')->onDelete('cascade');

             //Llave foránea para pregunta
             $table->integer('idPregunta')->unsigned();
             $table->foreign('idPregunta')->references('idPregunta')->on('pregunta')->onDelete('cascade');

              //Llave foránea para ponderacion
            $table->integer('idPonderacion')->nullable()->unsigned();
            $table->foreign('idPonderacion')->references('idPonderacion')->on('ponderacion')->onDelete('cascade');

            $table->dateTime('fecha');
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
        Schema::dropIfExists('preguntaUsuario');
    }
}

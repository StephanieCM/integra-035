<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta', function (Blueprint $table) {
            $table->bigIncrements('idPregunta');
            $table->text('nombre')->nullable();
            $table->integer('encuesta')->nullable();
            $table->integer('folio')->nullable();
            $table->boolean('estatus');

            //Llave foránea para categoria
            $table->integer('idCategoria')->nullable()->unsigned();
            $table->foreign('idCategoria')->references('idCategoria')->on('categoria')->onDelete('cascade');
            
            //Llave foránea para dominio
            $table->integer('idDominio')->nullable()->unsigned();
            $table->foreign('idDominio')->references('idDominio')->on('dominio')->onDelete('cascade');
            
            //Llave foránea para dimension
            $table->integer('idDimension')->nullable()->unsigned();
            $table->foreign('idDimension')->references('idDimension')->on('dimension')->onDelete('cascade');

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
        Schema::dropIfExists('pregunta');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso', function (Blueprint $table) {
            #$table->bigIncrements('idPermiso');
            $table->integer('idMenu');

             //Llave foránea para acción
             $table->integer('idAccion')->unsigned();
             $table->foreign('idAccion')->references('idAccion')->on('accion')->onDelete('cascade');

              //Llave foránea para rol
            $table->integer('idRol')->nullable()->unsigned();
            $table->foreign('idRol')->references('idRole')->on('role')->onDelete('cascade');

            #$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permiso');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarioRole', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('idUsuarioRole');
            $table->foreign('idUsuarioRole')->references('idUsuario')->on('users');
            $table->integer('idRoleUsuario');
            $table->foreign('idRoleUsuario')->references('idRole')->on('role');
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
        Schema::dropIfExists('usuarioRole');
    }
}

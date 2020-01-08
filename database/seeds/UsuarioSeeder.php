<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuario')->insert([
        	'idUsuario'=> '1',
        	'usuario' => 'root',
        	'contrasena' => bcrypt('root'),
        	'estado' => true,
        ]);
    }
}

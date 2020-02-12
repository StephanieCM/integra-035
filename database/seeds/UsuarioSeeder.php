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
        	'password' => bcrypt('123456789'),
        ]);

        DB::table('usuario')->insert([
        	'idUsuario'=> '2',
        	'usuario' => 'empleado',
        	'password' => bcrypt('0123456789'),
        ]);
    }
}

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
        DB::table('users')->insert([
        	'idUsuario'=> '1',
        	'name' => 'root',
        	'password' => bcrypt('123456789'),
        ]);
    }
}

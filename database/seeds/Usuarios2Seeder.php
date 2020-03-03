<?php

use Illuminate\Database\Seeder;

class Usuarios2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
        	'idUsuario'=> '19',
        	'usuario' => 'empleadoAA',
        	'password' => bcrypt('integra2020AA'),
        ]);
         DB::table('usuario')->insert([
        	'idUsuario'=> '20',
        	'usuario' => 'empleadoBB',
        	'password' => bcrypt('integra2020BB'),
        ]);
          DB::table('usuario')->insert([
        	'idUsuario'=> '21',
        	'usuario' => 'empleadoCC',
        	'password' => bcrypt('integra2020CC'),
        ]);
           DB::table('usuario')->insert([
        	'idUsuario'=> '22',
        	'usuario' => 'empleadoDD',
        	'password' => bcrypt('integra2020DD'),
        ]);
            DB::table('usuario')->insert([
        	'idUsuario'=> '23',
        	'usuario' => 'empleadoEE',
        	'password' => bcrypt('integra2020EE'),
        ]);
             DB::table('usuario')->insert([
        	'idUsuario'=> '24',
        	'usuario' => 'empleadoFF',
        	'password' => bcrypt('integra2020FF'),
        ]);
              DB::table('usuario')->insert([
        	'idUsuario'=> '25',
        	'usuario' => 'empleadoGG',
        	'password' => bcrypt('integra2020GG'),
        ]);
               DB::table('usuario')->insert([
        	'idUsuario'=> '26',
        	'usuario' => 'empleadoHH',
        	'password' => bcrypt('integra2020HH'),
        ]);
                DB::table('usuario')->insert([
        	'idUsuario'=> '27',
        	'usuario' => 'empleadoII',
        	'password' => bcrypt('integra2020II'),
        ]);
                 DB::table('usuario')->insert([
        	'idUsuario'=> '28',
        	'usuario' => 'sistemasA',
        	'password' => bcrypt('integra2020sisA'),
        ]);
                  DB::table('usuario')->insert([
        	'idUsuario'=> '29',
        	'usuario' => 'sistemasB',
        	'password' => bcrypt('integra2020sisB'),
        ]);
                   DB::table('usuario')->insert([
        	'idUsuario'=> '30',
        	'usuario' => 'sistemasC',
        	'password' => bcrypt('integra2020sisC'),
        ]);
    }
}

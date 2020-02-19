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
        	'usuario' => 'stef',
        	'password' => bcrypt('integra3099*'),
        ]);

        DB::table('usuario')->insert([
        	'idUsuario'=> '2',
        	'usuario' => 'empleadoA',
        	'password' => bcrypt('integra2020A'),
        ]);
         DB::table('usuario')->insert([
        	'idUsuario'=> '3',
        	'usuario' => 'empleadoB',
        	'password' => bcrypt('integra2020B'),
        ]);
          DB::table('usuario')->insert([
        	'idUsuario'=> '4',
        	'usuario' => 'empleadoC',
        	'password' => bcrypt('integra2020C'),
        ]);
           DB::table('usuario')->insert([
        	'idUsuario'=> '5',
        	'usuario' => 'empleadoD',
        	'password' => bcrypt('integra2020D'),
        ]);
            DB::table('usuario')->insert([
        	'idUsuario'=> '6',
        	'usuario' => 'empleadoE',
        	'password' => bcrypt('integra2020E'),
        ]);
             DB::table('usuario')->insert([
        	'idUsuario'=> '7',
        	'usuario' => 'empleadoF',
        	'password' => bcrypt('integra2020F'),
        ]);
              DB::table('usuario')->insert([
        	'idUsuario'=> '8',
        	'usuario' => 'empleadoG',
        	'password' => bcrypt('integra2020G'),
        ]);
               DB::table('usuario')->insert([
        	'idUsuario'=> '9',
        	'usuario' => 'empleadoH',
        	'password' => bcrypt('integra2020H'),
        ]);
                DB::table('usuario')->insert([
        	'idUsuario'=> '10',
        	'usuario' => 'empleadoI',
        	'password' => bcrypt('integra2020I'),
        ]);
                 DB::table('usuario')->insert([
        	'idUsuario'=> '11',
        	'usuario' => 'empleadoJ',
        	'password' => bcrypt('integra2020J'),
        ]); DB::table('usuario')->insert([
        	'idUsuario'=> '12',
        	'usuario' => 'empleadoK',
        	'password' => bcrypt('integra2020K'),
        ]);
         DB::table('usuario')->insert([
        	'idUsuario'=> '13',
        	'usuario' => 'empleadoL',
        	'password' => bcrypt('integra2020L'),
        ]);
          DB::table('usuario')->insert([
        	'idUsuario'=> '14',
        	'usuario' => 'empleadoM',
        	'password' => bcrypt('integra2020M'),
        ]);
           DB::table('usuario')->insert([
        	'idUsuario'=> '15',
        	'usuario' => 'empleadoN',
        	'password' => bcrypt('integra2020N'),
        ]);
            DB::table('usuario')->insert([
        	'idUsuario'=> '16',
        	'usuario' => 'empleadoP',
        	'password' => bcrypt('integra2020P'),
        ]);
             DB::table('usuario')->insert([
        	'idUsuario'=> '17',
        	'usuario' => 'empleadoR',
        	'password' => bcrypt('integra2020R'),
        ]);
              DB::table('usuario')->insert([
        	'idUsuario'=> '18',
        	'usuario' => 'empleadoT',
        	'password' => bcrypt('integra2020T'),
        ]);
              
        
                 
    }
}

<?php

use Illuminate\Database\Seeder;

class PeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodoEncuesta')->insert([
        	'idPeriodo'=> '1',
        	'nombre' => 'Prueba',
                'fechaInicio' => '2020/02/18',
                'fechaFin' => '2020/12/18',
                'estatus' => 'true',
        ]); 
    }
}

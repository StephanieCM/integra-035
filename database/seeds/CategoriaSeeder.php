<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TABLA CATEGORIA
        DB::table('categoria')->insert([
        	'idCategoria'=> '1',
        	'nombre' => 'I.- Acontecimiento traumático severo',
        ]);
        DB::table('categoria')->insert([
        	'idCategoria'=> '2',
        	'nombre' => 'II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes)',
        ]);
        DB::table('categoria')->insert([
        	'idCategoria'=> '3',
        	'nombre' => 'III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento',
        ]);
        DB::table('categoria')->insert([
        	'idCategoria'=> '4',
        	'nombre' => 'IV.- Afectación (durante el último mes)',
        ]);   
         DB::table('categoria')->insert([
        	'idCategoria'=> '5',
        	'nombre' => 'Factores propios de la actividad',
        ]);   
          DB::table('categoria')->insert([
        	'idCategoria'=> '6',
        	'nombre' => 'Ambiente de trabajo',
        ]);   
           DB::table('categoria')->insert([
        	'idCategoria'=> '7',
        	'nombre' => 'Organización del tiempo de trabajo',
        ]);   
            DB::table('categoria')->insert([
        	'idCategoria'=> '8',
        	'nombre' => 'Liderazgo y relaciones en el trabajo',
        ]);   
            DB::table('categoria')->insert([
        	'idCategoria'=> '9',
        	'nombre' => 'Entorno organizacional',
        ]);   
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* $this->call(UsuarioSeeder::class);
        $this->call(PeriodoSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(EncuestaSeeder::class);
        $this->call(PonderacionSeeder::class);*/
        $this->call(Usuarios2Seeder::class);
    }
}

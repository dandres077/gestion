<?php

use Illuminate\Database\Seeder;
use App\Paises;

class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paises::create(['nombre' => 'Argentina', 'status' => '2']);
		Paises::create(['nombre' => 'Bolivia', 'status' => '2']);
		Paises::create(['nombre' => 'Brasil', 'status' => '2']);
		Paises::create(['nombre' => 'Chile', 'status' => '2']);
		Paises::create(['nombre' => 'Colombia', 'status' => '1']);
		Paises::create(['nombre' => 'Costa Rica', 'status' => '2']);
		Paises::create(['nombre' => 'Cuba', 'status' => '2']);
		Paises::create(['nombre' => 'Ecuador', 'status' => '2']);
		Paises::create(['nombre' => 'El Salvador', 'status' => '2']);
		Paises::create(['nombre' => 'Guayana Francesa', 'status' => '2']);
		Paises::create(['nombre' => 'Granada', 'status' => '2']);
		Paises::create(['nombre' => 'Guatemala', 'status' => '2']);
		Paises::create(['nombre' => 'Guayana', 'status' => '2']);
		Paises::create(['nombre' => 'Haití', 'status' => '2']);
		Paises::create(['nombre' => 'Honduras', 'status' => '2']);
		Paises::create(['nombre' => 'Jamaica', 'status' => '2']);
		Paises::create(['nombre' => 'México', 'status' => '2']);
		Paises::create(['nombre' => 'Nicaragua', 'status' => '2']);
		Paises::create(['nombre' => 'Paraguay', 'status' => '2']);
		Paises::create(['nombre' => 'Panamá', 'status' => '2']);
		Paises::create(['nombre' => 'Perú', 'status' => '2']);
		Paises::create(['nombre' => 'Puerto Rico', 'status' => '2']);
		Paises::create(['nombre' => 'República Dominicana', 'status' => '2']);
		Paises::create(['nombre' => 'Surinam', 'status' => '2']);
		Paises::create(['nombre' => 'Uruguay', 'status' => '2']);
		Paises::create(['nombre' => 'Venezuela', 'status' => '2']);
    }
}
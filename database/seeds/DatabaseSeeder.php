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
        // $this->call(UsersTableSeeder::class);
        //factory(App\Paises::class, 50)->create();

        $this->call(UsersSeeder::class);
        $this->call(PaisesSeeder::class);
        $this->call(DepartamentosSeeder::class);
        $this->call(CiudadesSeeder::class);
        $this->call(CatalogosSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class); 
    }
}

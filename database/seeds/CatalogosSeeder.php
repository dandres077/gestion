<?php

use Illuminate\Database\Seeder;
use App\Catalogos;

class CatalogosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
        Catalogos::create(['nombre' => '1','opcion' => 'RUT']);
        Catalogos::create(['nombre' => '1','opcion' => 'NIT']);
        Catalogos::create(['nombre' => '2','opcion' => 'Cédula de Ciudadanía']);
        Catalogos::create(['nombre' => '2','opcion' => 'Tarjeta de Identidad']);
        Catalogos::create(['nombre' => '2','opcion' => 'Cedula de Extranjería']);
        Catalogos::create(['nombre' => '2','opcion' => 'Registro Civil']);
        Catalogos::create(['nombre' => '2','opcion' => 'Numero de Identificación Personal (NIP)']);
        Catalogos::create(['nombre' => '2','opcion' => 'Número Unico de Identificación Personal (NUIP)']);
        Catalogos::create(['nombre' => '2','opcion' => 'NES']);
        Catalogos::create(['nombre' => '2','opcion' => 'Certificado de Cabildo']);
        Catalogos::create(['nombre' => '2','opcion' => 'Pasaporte']);
        Catalogos::create(['nombre' => '2','opcion' => 'Permiso Especial de Residencia (PEP)']);       
        Catalogos::create(['nombre' => '3','opcion' => 'Efectivo']);
        Catalogos::create(['nombre' => '3','opcion' => 'Tarjeta Débito']);
        Catalogos::create(['nombre' => '3','opcion' => 'Tarjeta Crédito']);
        Catalogos::create(['nombre' => '3','opcion' => 'Transferencia']);
        Catalogos::create(['nombre' => '3','opcion' => 'Cheque']);
        Catalogos::create(['nombre' => '4','opcion' => 'Mujer']);
        Catalogos::create(['nombre' => '4','opcion' => 'Hombre']);
        Catalogos::create(['nombre' => '4','opcion' => 'Otro']);       
        Catalogos::create(['nombre' => '5','opcion' => 'Oficial']);
        Catalogos::create(['nombre' => '5','opcion' => 'No oficial']);
        Catalogos::create(['nombre' => '6','opcion' => 'Urbana']);
        Catalogos::create(['nombre' => '6','opcion' => 'Rural']);
        Catalogos::create(['nombre' => '6','opcion' => 'Urbana y Rural']);
        Catalogos::create(['nombre' => '7','opcion' => 'O+']);
        Catalogos::create(['nombre' => '7','opcion' => 'O-']);
        Catalogos::create(['nombre' => '7','opcion' => 'A+']);
        Catalogos::create(['nombre' => '7','opcion' => 'A-']);
        Catalogos::create(['nombre' => '7','opcion' => 'B+']);
        Catalogos::create(['nombre' => '7','opcion' => 'B-']);
        Catalogos::create(['nombre' => '7','opcion' => 'AB+']);
        Catalogos::create(['nombre' => '7','opcion' => 'AB-']);
        Catalogos::create(['nombre' => '8','opcion' => 'Zona norte']);
        Catalogos::create(['nombre' => '8','opcion' => 'Zon sur']);
        Catalogos::create(['nombre' => '8','opcion' => 'Zona oriente']);
        Catalogos::create(['nombre' => '8','opcion' => 'Zona occidente']);
        Catalogos::create(['nombre' => '9','opcion' => 'Soltero(a)']);
        Catalogos::create(['nombre' => '9','opcion' => 'Casado(a)']);
        Catalogos::create(['nombre' => '9','opcion' => 'Divorciado(a)']);
        Catalogos::create(['nombre' => '9','opcion' => 'Separación en proceso judicial']);
        Catalogos::create(['nombre' => '9','opcion' => 'Viudo(a)']);
        Catalogos::create(['nombre' => '9','opcion' => 'Unión libre']);

    }
}





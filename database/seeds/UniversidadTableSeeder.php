<?php

use App\Models\Universidad;
use Illuminate\Database\Seeder;

class UniversidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $universidad = new Universidad();
        $universidad->nombre = 'Universidad Politécnica de Quintana Roo';
        $universidad->direccion = 'Av. Arco Bicentenario, Mza. 11, Lote 1119-33, Sm. 255. Cancún, Quintana Roo, México. C.P. 77500';
        $universidad->telefono = '(998) 283 1859';
        $universidad->email = 'info@upqroo.edu.mx';
        $universidad->rector_titulo = 'Dr.';
        $universidad->rector_nombres = 'Raúl Arístedes';
        $universidad->rector_apellidos = 'Pérez Aguilar';
        $universidad->save();
    }
}

<?php

namespace App\Repositories;

use App\Models\Universidad;
use InfyOm\Generator\Common\BaseRepository;

class UniversidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
        'rector_titulo',
        'rector_nombres',
        'rector_apellidos',
        'jefe_vinculacion_titulo',
        'jefe_vinculacion_nombres',
        'jefe_vinculacion_apellidos'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Universidad::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\Alumno;
use InfyOm\Generator\Common\BaseRepository;

class AlumnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'matricula',
        'nombres',
        'apellidos',
        'email',
        'telefono',
        'nss',
        'cuatrimestre',
        'grupo',
        'idCarrera'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Alumno::class;
    }
}

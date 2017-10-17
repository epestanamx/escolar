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
      'sexo',
      'email',
      'email_oficial',
      'telefono',
      'nss',
      'curp',
      'cuatrimestre',
      'grupo',
      'idCarrera',
      'tipo_sangre',
      'contacto_nombres',
      'contacto_apellidos',
      'contacto_telefono',
      'contacto_parentesco',
      'contacto_direccion',
      'activado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Alumno::class;
    }
}

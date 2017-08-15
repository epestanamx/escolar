<?php

namespace App\Repositories;

use App\Models\Estadias;
use InfyOm\Generator\Common\BaseRepository;

class EstadiasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idAlumno',
        'idProyecto',
        'liberada'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Estadias::class;
    }
}

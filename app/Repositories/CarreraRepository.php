<?php

namespace App\Repositories;

use App\Models\Carrera;
use InfyOm\Generator\Common\BaseRepository;

class CarreraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'coordinador',
        'activa'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Carrera::class;
    }
}

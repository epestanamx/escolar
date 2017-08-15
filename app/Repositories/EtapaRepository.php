<?php

namespace App\Repositories;

use App\Models\Etapa;
use InfyOm\Generator\Common\BaseRepository;

class EtapaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idProyecto',
        'semana',
        'competencias',
        'descripcion',
        'horas'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Etapa::class;
    }
}

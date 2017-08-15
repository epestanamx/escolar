<?php

namespace App\Repositories;

use App\Models\Estancia;
use InfyOm\Generator\Common\BaseRepository;

class EstanciaRepository extends BaseRepository
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
        return Estancia::class;
    }
}

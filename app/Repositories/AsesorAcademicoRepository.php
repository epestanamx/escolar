<?php

namespace App\Repositories;

use App\Models\AsesorAcademico;
use InfyOm\Generator\Common\BaseRepository;

class AsesorAcademicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'nombres',
        'apellidos',
        'email',
        'telefono'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AsesorAcademico::class;
    }
}

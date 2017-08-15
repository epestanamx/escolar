<?php

namespace App\Repositories;

use App\Models\AsesorEmpresarial;
use InfyOm\Generator\Common\BaseRepository;

class AsesorEmpresarialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'nombres',
        'apellidos',
        'email',
        'telefono',
        'idEmpresa'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AsesorEmpresarial::class;
    }
}

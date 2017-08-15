<?php

namespace App\Repositories;

use App\Models\Proyecto;
use InfyOm\Generator\Common\BaseRepository;

class ProyectoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'objetivos',
        'actividades_aprendizaje',
        'resultados_aprendizaje',
        'evidencias',
        'instrumentos_evaluacion',
        'asignaturas',
        'topicos_recomendados',
        'estrategias_didacticas',
        'idAlumno',
        'idEmpresa',
        'idAsesorEmpresarial',
        'idAsesorAcademico'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Proyecto::class;
    }
}

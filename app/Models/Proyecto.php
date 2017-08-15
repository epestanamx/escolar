<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Proyecto
 * @package App\Models
 * @version August 8, 2017, 4:37 pm UTC
 */
class Proyecto extends Model
{
    use SoftDeletes;

    public $table = 'proyectos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'objetivos' => 'string',
        'actividades_aprendizaje' => 'string',
        'resultados_aprendizaje' => 'string',
        'evidencias' => 'string',
        'instrumentos_evaluacion' => 'string',
        'asignaturas' => 'string',
        'topicos_recomendados' => 'string',
        'estrategias_didacticas' => 'string',
        'idAlumno' => 'integer',
        'idEmpresa' => 'integer',
        'idAsesorEmpresarial' => 'integer',
        'idAsesorAcademico' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function alumno()
    {
        return $this->belongsTo(\App\Models\Alumno::class, 'idAlumno', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function asesorAcademico()
    {
        return $this->belongsTo(\App\Models\AsesorAcademico::class, 'idAsesorAcademico', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function asesorEmpresarial()
    {
        return $this->belongsTo(\App\Models\AsesorEmpresarial::class, 'idAsesorEmpresarial', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function empresa()
    {
        return $this->belongsTo(\App\Models\Empresa::class, 'idEmpresa', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function estadias()
    {
        return $this->hasMany(\App\Models\Estadia::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function estancias()
    {
        return $this->hasMany(\App\Models\Estancia::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function etapas()
    {
        return $this->hasMany(\App\Models\Etapa::class, 'idProyecto', 'id');
    }
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Alumno
 * @package App\Models
 * @version August 8, 2017, 3:45 pm UTC
 */
class Alumno extends Model
{
    use SoftDeletes;

    public $table = 'alumnos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'matricula' => 'string',
        'nombres' => 'string',
        'apellidos' => 'string',
        'email' => 'string',
        'telefono' => 'string',
        'nss' => 'string',
        'cuatrimestre' => 'string',
        'grupo' => 'string',
        'idCarrera' => 'integer'
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
    public function carrera()
    {
        return $this->belongsTo(\App\Models\Carrera::class, 'idCarrera', 'id');
    }

    public function proyectos()
    {
        return $this->hasMany(\App\Models\Proyecto::class, 'idAlumno', 'id');
    }
}

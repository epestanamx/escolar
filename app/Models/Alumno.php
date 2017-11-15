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
        'password',
        'token',
        'activado'
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
        'email_oficial' => 'string',
        'telefono' => 'string',
        'nss' => 'string',
        'curp' => 'string',
        'sexo' => 'string',
        'cuatrimestre' => 'string',
        'grupo' => 'string',
        'idCarrera' => 'integer',
        'tipo_sangre' => 'string',
        'contacto_nombres' => 'string',
        'contacto_apellidos' => 'string',
        'contacto_telefono' => 'string',
        'contacto_parentesco' => 'string',
        'contacto_direccion' => 'string',
        'password' => 'string',
        'activado' => 'boolean',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
      'matricula' => 'required',
      'nombres' => 'required',
      'apellidos' => 'required',
      'idCarrera' => 'required'
    ];

    protected $hidden = [
      'password',
      'token'
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

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Credencial
 * @package App\Models
 * @version November 17, 2017, 5:25 pm UTC
 *
 * @property string idAlumno
 * @property string tipo
 * @property string estado
 */
class Credencial extends Model
{
    use SoftDeletes;

    public $table = 'credencials';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idAlumno',
        'tipo',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idAlumno' => 'string',
        'tipo' => 'string',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idAlumno' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function alumno()
    {
        return $this->belongsTo(\App\Models\Alumno::class, 'idAlumno', 'id');
    }

}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estadias
 * @package App\Models
 * @version August 8, 2017, 4:37 pm UTC
 */
class Estadias extends Model
{
    use SoftDeletes;

    public $table = 'estadias';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idAlumno',
        'idProyecto',
        'liberada'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idAlumno' => 'integer',
        'idProyecto' => 'integer',
        'liberada' => 'boolean'
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
    public function proyecto()
    {
        return $this->belongsTo(\App\Models\Proyecto::class, 'idProyecto', 'id');
    }
}

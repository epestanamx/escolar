<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AsesorAcademico
 * @package App\Models
 * @version August 8, 2017, 3:45 pm UTC
 */
class AsesorAcademico extends Model
{
    use SoftDeletes;

    public $table = 'asesores_academicos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'titulo',
        'nombres',
        'apellidos',
        'email',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'nombres' => 'string',
        'apellidos' => 'string',
        'email' => 'string',
        'telefono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

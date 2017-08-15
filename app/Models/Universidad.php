<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Universidad
 * @package App\Models
 * @version August 8, 2017, 3:44 pm UTC
 */
class Universidad extends Model
{
    use SoftDeletes;

    public $table = 'universidad';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
        'jefe_vinculacion_titulo',
        'jefe_vinculacion_nombres',
        'jefe_vinculacion_apellidos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'email' => 'string',
        'jefe_vinculacion_titulo' => 'string',
        'jefe_vinculacion_nombres' => 'string',
        'jefe_vinculacion_apellidos' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

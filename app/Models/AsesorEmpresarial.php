<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AsesorEmpresarial
 * @package App\Models
 * @version August 8, 2017, 3:52 pm UTC
 */
class AsesorEmpresarial extends Model
{
    use SoftDeletes;

    public $table = 'asesores_empresariales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'titulo',
        'nombres',
        'apellidos',
        'email',
        'telefono',
        'idEmpresa'
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
        'telefono' => 'string',
        'idEmpresa' => 'integer'
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
    public function empresa()
    {
        return $this->belongsTo(\App\Models\Empresa::class, 'idEmpresa', 'id');
    }
}

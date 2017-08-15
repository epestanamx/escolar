<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empresa
 * @package App\Models
 * @version August 8, 2017, 3:50 pm UTC
 */
class Empresa extends Model
{
    use SoftDeletes;

    public $table = 'empresas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'giro_comercial',
        'tipo',
        'dirección',
        'telefono',
        'titulo',
        'responsable_rh',
        'extension'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'giro_comercial' => 'string',
        'tipo' => 'string',
        'dirección' => 'string',
        'telefono' => 'string',
        'titulo' => 'string',
        'responsable_rh' => 'string',
        'extension' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function asesores()
    {
        return $this->hasMany(AsesorEmpresarial::class, 'idEmpresa', 'id');
    }
}

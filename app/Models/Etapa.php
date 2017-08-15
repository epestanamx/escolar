<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Etapa
 * @package App\Models
 * @version August 8, 2017, 4:37 pm UTC
 */
class Etapa extends Model
{
    use SoftDeletes;

    public $table = 'etapas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idProyecto',
        'semana',
        'competencias',
        'descripcion',
        'horas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idProyecto' => 'integer',
        'semana' => 'string',
        'competencias' => 'string',
        'descripcion' => 'string',
        'horas' => 'integer'
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
    public function proyecto()
    {
        return $this->belongsTo(\App\Models\Proyecto::class, 'idProyecto', 'id');
    }
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CartaPresentacion
 * @package App\Models
 * @version October 12, 2017, 11:56 pm UTC
 *
 * @method static CartaPresentacion find($id=null, $columns = array())
 * @method static CartaPresentacion|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property integer idAlumno
 * @property integer idEmpresa
 * @property integer idPeriodo
 * @property string tipo
 * @property integer horas
 */
class CartaPresentacion extends Model
{
    use SoftDeletes;

    public $table = 'carta_presentacions';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idAlumno',
        'idEmpresa',
        'idPeriodo',
        'tipo',
        'horas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idAlumno' => 'integer',
        'idEmpresa' => 'integer',
        'idPeriodo' => 'integer',
        'tipo' => 'string',
        'horas' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idAlumno' => 'required',
        'idEmpresa' => 'required',
        'idPeriodo' => 'required',
        'tipo' => 'required',
        'horas' => 'required'
    ];

    public function alumno()
    {
        return $this->belongsTo(\App\Models\Alumno::class, 'idAlumno', 'id');
    }

    public function periodo()
    {
        return $this->belongsTo(\App\Models\Periodo::class, 'idPeriodo', 'id');
    }

    public function empresa()
    {
        return $this->belongsTo(\App\Models\Empresa::class, 'idEmpresa', 'id');
    }
}

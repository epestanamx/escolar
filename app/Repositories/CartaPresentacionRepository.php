<?php

namespace App\Repositories;

use App\Models\CartaPresentacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CartaPresentacionRepository
 * @package App\Repositories
 * @version October 12, 2017, 11:56 pm UTC
 *
 * @method CartaPresentacion findWithoutFail($id, $columns = ['*'])
 * @method CartaPresentacion find($id, $columns = ['*'])
 * @method CartaPresentacion first($columns = ['*'])
*/
class CartaPresentacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idAlumno',
        'idEmpresa',
        'idPeriodo',
        'tipo',
        'horas'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CartaPresentacion::class;
    }
}

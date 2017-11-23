<?php

namespace App\Repositories;

use App\Models\Credencial;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CredencialRepository
 * @package App\Repositories
 * @version November 17, 2017, 5:25 pm UTC
 *
 * @method Credencial findWithoutFail($id, $columns = ['*'])
 * @method Credencial find($id, $columns = ['*'])
 * @method Credencial first($columns = ['*'])
*/
class CredencialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idAlumno',
        'tipo',
        'estado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Credencial::class;
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAlumnoAPIRequest;
use App\Http\Requests\API\UpdateAlumnoAPIRequest;
use App\Models\Alumno;
use App\Repositories\AlumnoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class AlumnoController
 * @package App\Http\Controllers\API
 */

class AlumnoAPIController extends AppBaseController
{
    /** @var  AlumnoRepository */
    private $alumnoRepository;

    public function __construct(AlumnoRepository $alumnoRepo)
    {
        $this->alumnoRepository = $alumnoRepo;
    }

    /**
     * Display a listing of the Alumno.
     * GET|HEAD /alumnos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->alumnoRepository->pushCriteria(new RequestCriteria($request));
        $this->alumnoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $alumnos = $this->alumnoRepository->all();

        return $this->sendResponse($alumnos->toArray(), 'Alumnos retrieved successfully');
    }

    /**
     * Store a newly created Alumno in storage.
     * POST /alumnos
     *
     * @param CreateAlumnoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateAlumnoAPIRequest $request)
    {
        $input = $request->all();
        $input['activado'] = false;
        $input['email_oficial'] = $input['matricula'] . '@estudiantes.upqroo.edu.mx';
        $input['password'] = $input['matricula'];
        $input['token'] = str_random(40);

        $alumnos = $this->alumnoRepository->create($input);

        return $this->sendResponse($alumnos->toArray(), 'Alumno saved successfully');
    }

    /**
     * Display the specified Alumno.
     * GET|HEAD /alumnos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Alumno $alumno */
        $alumno = $this->alumnoRepository->findWithoutFail($id);

        if (empty($alumno)) {
            return $this->sendError('Alumno not found');
        }

        return $this->sendResponse($alumno->toArray(), 'Alumno retrieved successfully');
    }

    /**
     * Update the specified Alumno in storage.
     * PUT/PATCH /alumnos/{id}
     *
     * @param  int $id
     * @param UpdateAlumnoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAlumnoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Alumno $alumno */
        $alumno = $this->alumnoRepository->findWithoutFail($id);

        if (empty($alumno)) {
            return $this->sendError('Alumno not found');
        }

        $alumno = $this->alumnoRepository->update($input, $id);

        return $this->sendResponse($alumno->toArray(), 'Alumno updated successfully');
    }

    /**
     * Remove the specified Alumno from storage.
     * DELETE /alumnos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Alumno $alumno */
        $alumno = $this->alumnoRepository->findWithoutFail($id);

        if (empty($alumno)) {
            return $this->sendError('Alumno not found');
        }

        $alumno->delete();

        return $this->sendResponse($id, 'Alumno deleted successfully');
    }

    public function verificar($token)
    {
        $alumno = $this->alumnoRepository->findWhere(['token' => $token])->first();

        if (empty($alumno)) {
            return $this->sendError('El token de activación de expiró.');
        }

        $alumno->activado = true;
        $alumno->token = null;
        $alumno->save();

        return $this->sendResponse($id, 'Alumno activado de forma correcta.');
    }
}

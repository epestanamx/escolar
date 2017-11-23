<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCredencialAPIRequest;
use App\Http\Requests\API\UpdateCredencialAPIRequest;
use App\Mail\CredencialCreacion;
use App\Models\Credencial;
use App\Repositories\CredencialRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class CredencialController
 * @package App\Http\Controllers\API
 */

class CredencialAPIController extends AppBaseController
{
    /** @var  CredencialRepository */
    private $credencialRepository;

    public function __construct(CredencialRepository $credencialRepo)
    {
        $this->credencialRepository = $credencialRepo;
    }

    /**
     * Display a listing of the Credencial.
     * GET|HEAD /credencials
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->credencialRepository->pushCriteria(new RequestCriteria($request));
        $this->credencialRepository->pushCriteria(new LimitOffsetCriteria($request));
        $credencials = $this->credencialRepository->all();

        return $this->sendResponse($credencials->toArray(), 'Credencials retrieved successfully');
    }

    /**
     * Store a newly created Credencial in storage.
     * POST /credencials
     *
     * @param CreateCredencialAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCredencialAPIRequest $request)
    {
        $input = $request->all();
        $input['estado'] = 'Pendiente';

        $credenciales = Credencial::where('idAlumno', '=', $input['idAlumno']);

        if (count($credenciales) >= 1) {
          $input['tipo'] = 'Reposición';
        } else {
          $input['tipo'] = 'Nueva';
        }

        $credencials = $this->credencialRepository->create($input);

        Mail::to($credencials->alumno->email_oficial)->send(new CredencialCreacion($credencials));

        return $this->sendResponse($credencials->toArray(), 'Credencial saved successfully');
    }

    /**
     * Display the specified Credencial.
     * GET|HEAD /credencials/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Credencial $credencial */
        $credencial = $this->credencialRepository->findWithoutFail($id);

        if (empty($credencial)) {
            return $this->sendError('Credencial not found');
        }

        return $this->sendResponse($credencial->toArray(), 'Credencial retrieved successfully');
    }

    /**
     * Update the specified Credencial in storage.
     * PUT/PATCH /credencials/{id}
     *
     * @param  int $id
     * @param UpdateCredencialAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCredencialAPIRequest $request)
    {
        $input = $request->all();

        /** @var Credencial $credencial */
        $credencial = $this->credencialRepository->findWithoutFail($id);

        if (empty($credencial)) {
            return $this->sendError('Credencial not found');
        }

        $credencial = $this->credencialRepository->update($input, $id);

        return $this->sendResponse($credencial->toArray(), 'Credencial updated successfully');
    }

    /**
     * Remove the specified Credencial from storage.
     * DELETE /credencials/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Credencial $credencial */
        $credencial = $this->credencialRepository->findWithoutFail($id);

        if (empty($credencial)) {
            return $this->sendError('Credencial not found');
        }

        $credencial->delete();

        return $this->sendResponse($id, 'Credencial deleted successfully');
    }
}

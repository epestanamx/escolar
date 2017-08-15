<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCarreraAPIRequest;
use App\Http\Requests\API\UpdateCarreraAPIRequest;
use App\Models\Carrera;
use App\Repositories\CarreraRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class CarreraController
 * @package App\Http\Controllers\API
 */

class CarreraAPIController extends AppBaseController
{
    /** @var  CarreraRepository */
    private $carreraRepository;

    public function __construct(CarreraRepository $carreraRepo)
    {
        $this->carreraRepository = $carreraRepo;
    }

    /**
     * Display a listing of the Carrera.
     * GET|HEAD /carreras
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->carreraRepository->pushCriteria(new RequestCriteria($request));
        $this->carreraRepository->pushCriteria(new LimitOffsetCriteria($request));
        $carreras = $this->carreraRepository->all();

        return $this->sendResponse($carreras->toArray(), 'Carreras retrieved successfully');
    }

    /**
     * Store a newly created Carrera in storage.
     * POST /carreras
     *
     * @param CreateCarreraAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCarreraAPIRequest $request)
    {
        $input = $request->all();

        $carreras = $this->carreraRepository->create($input);

        return $this->sendResponse($carreras->toArray(), 'Carrera saved successfully');
    }

    /**
     * Display the specified Carrera.
     * GET|HEAD /carreras/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Carrera $carrera */
        $carrera = $this->carreraRepository->findWithoutFail($id);

        if (empty($carrera)) {
            return $this->sendError('Carrera not found');
        }

        return $this->sendResponse($carrera->toArray(), 'Carrera retrieved successfully');
    }

    /**
     * Update the specified Carrera in storage.
     * PUT/PATCH /carreras/{id}
     *
     * @param  int $id
     * @param UpdateCarreraAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCarreraAPIRequest $request)
    {
        $input = $request->all();

        /** @var Carrera $carrera */
        $carrera = $this->carreraRepository->findWithoutFail($id);

        if (empty($carrera)) {
            return $this->sendError('Carrera not found');
        }

        $carrera = $this->carreraRepository->update($input, $id);

        return $this->sendResponse($carrera->toArray(), 'Carrera updated successfully');
    }

    /**
     * Remove the specified Carrera from storage.
     * DELETE /carreras/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Carrera $carrera */
        $carrera = $this->carreraRepository->findWithoutFail($id);

        if (empty($carrera)) {
            return $this->sendError('Carrera not found');
        }

        $carrera->delete();

        return $this->sendResponse($id, 'Carrera deleted successfully');
    }
}

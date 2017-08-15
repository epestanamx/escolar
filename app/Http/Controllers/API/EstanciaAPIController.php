<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEstanciaAPIRequest;
use App\Http\Requests\API\UpdateEstanciaAPIRequest;
use App\Models\Estancia;
use App\Repositories\EstanciaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class EstanciaController
 * @package App\Http\Controllers\API
 */

class EstanciaAPIController extends AppBaseController
{
    /** @var  EstanciaRepository */
    private $estanciaRepository;

    public function __construct(EstanciaRepository $estanciaRepo)
    {
        $this->estanciaRepository = $estanciaRepo;
    }

    /**
     * Display a listing of the Estancia.
     * GET|HEAD /estancias
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estanciaRepository->pushCriteria(new RequestCriteria($request));
        $this->estanciaRepository->pushCriteria(new LimitOffsetCriteria($request));
        $estancias = $this->estanciaRepository->all();

        return $this->sendResponse($estancias->toArray(), 'Estancias retrieved successfully');
    }

    /**
     * Store a newly created Estancia in storage.
     * POST /estancias
     *
     * @param CreateEstanciaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateEstanciaAPIRequest $request)
    {
        $input = $request->all();

        $estancias = $this->estanciaRepository->create($input);

        return $this->sendResponse($estancias->toArray(), 'Estancia saved successfully');
    }

    /**
     * Display the specified Estancia.
     * GET|HEAD /estancias/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Estancia $estancia */
        $estancia = $this->estanciaRepository->findWithoutFail($id);

        if (empty($estancia)) {
            return $this->sendError('Estancia not found');
        }

        return $this->sendResponse($estancia->toArray(), 'Estancia retrieved successfully');
    }

    /**
     * Update the specified Estancia in storage.
     * PUT/PATCH /estancias/{id}
     *
     * @param  int $id
     * @param UpdateEstanciaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstanciaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Estancia $estancia */
        $estancia = $this->estanciaRepository->findWithoutFail($id);

        if (empty($estancia)) {
            return $this->sendError('Estancia not found');
        }

        $estancia = $this->estanciaRepository->update($input, $id);

        return $this->sendResponse($estancia->toArray(), 'Estancia updated successfully');
    }

    /**
     * Remove the specified Estancia from storage.
     * DELETE /estancias/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Estancia $estancia */
        $estancia = $this->estanciaRepository->findWithoutFail($id);

        if (empty($estancia)) {
            return $this->sendError('Estancia not found');
        }

        $estancia->delete();

        return $this->sendResponse($id, 'Estancia deleted successfully');
    }
}

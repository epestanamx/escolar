<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEstadiasAPIRequest;
use App\Http\Requests\API\UpdateEstadiasAPIRequest;
use App\Models\Estadias;
use App\Repositories\EstadiasRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class EstadiasController
 * @package App\Http\Controllers\API
 */

class EstadiasAPIController extends AppBaseController
{
    /** @var  EstadiasRepository */
    private $estadiasRepository;

    public function __construct(EstadiasRepository $estadiasRepo)
    {
        $this->estadiasRepository = $estadiasRepo;
    }

    /**
     * Display a listing of the Estadias.
     * GET|HEAD /estadias
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estadiasRepository->pushCriteria(new RequestCriteria($request));
        $this->estadiasRepository->pushCriteria(new LimitOffsetCriteria($request));
        $estadias = $this->estadiasRepository->all();

        return $this->sendResponse($estadias->toArray(), 'Estadias retrieved successfully');
    }

    /**
     * Store a newly created Estadias in storage.
     * POST /estadias
     *
     * @param CreateEstadiasAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateEstadiasAPIRequest $request)
    {
        $input = $request->all();

        $estadias = $this->estadiasRepository->create($input);

        return $this->sendResponse($estadias->toArray(), 'Estadias saved successfully');
    }

    /**
     * Display the specified Estadias.
     * GET|HEAD /estadias/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Estadias $estadias */
        $estadias = $this->estadiasRepository->findWithoutFail($id);

        if (empty($estadias)) {
            return $this->sendError('Estadias not found');
        }

        return $this->sendResponse($estadias->toArray(), 'Estadias retrieved successfully');
    }

    /**
     * Update the specified Estadias in storage.
     * PUT/PATCH /estadias/{id}
     *
     * @param  int $id
     * @param UpdateEstadiasAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstadiasAPIRequest $request)
    {
        $input = $request->all();

        /** @var Estadias $estadias */
        $estadias = $this->estadiasRepository->findWithoutFail($id);

        if (empty($estadias)) {
            return $this->sendError('Estadias not found');
        }

        $estadias = $this->estadiasRepository->update($input, $id);

        return $this->sendResponse($estadias->toArray(), 'Estadias updated successfully');
    }

    /**
     * Remove the specified Estadias from storage.
     * DELETE /estadias/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Estadias $estadias */
        $estadias = $this->estadiasRepository->findWithoutFail($id);

        if (empty($estadias)) {
            return $this->sendError('Estadias not found');
        }

        $estadias->delete();

        return $this->sendResponse($id, 'Estadias deleted successfully');
    }
}

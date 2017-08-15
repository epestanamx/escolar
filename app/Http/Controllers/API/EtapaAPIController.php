<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEtapaAPIRequest;
use App\Http\Requests\API\UpdateEtapaAPIRequest;
use App\Models\Etapa;
use App\Repositories\EtapaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class EtapaController
 * @package App\Http\Controllers\API
 */

class EtapaAPIController extends AppBaseController
{
    /** @var  EtapaRepository */
    private $etapaRepository;

    public function __construct(EtapaRepository $etapaRepo)
    {
        $this->etapaRepository = $etapaRepo;
    }

    /**
     * Display a listing of the Etapa.
     * GET|HEAD /etapas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->etapaRepository->pushCriteria(new RequestCriteria($request));
        $this->etapaRepository->pushCriteria(new LimitOffsetCriteria($request));
        $etapas = $this->etapaRepository->all();

        return $this->sendResponse($etapas->toArray(), 'Etapas retrieved successfully');
    }

    /**
     * Store a newly created Etapa in storage.
     * POST /etapas
     *
     * @param CreateEtapaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateEtapaAPIRequest $request)
    {
        $input = $request->all();

        $etapas = $this->etapaRepository->create($input);

        return $this->sendResponse($etapas->toArray(), 'Etapa saved successfully');
    }

    /**
     * Display the specified Etapa.
     * GET|HEAD /etapas/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Etapa $etapa */
        $etapa = $this->etapaRepository->findWithoutFail($id);

        if (empty($etapa)) {
            return $this->sendError('Etapa not found');
        }

        return $this->sendResponse($etapa->toArray(), 'Etapa retrieved successfully');
    }

    /**
     * Update the specified Etapa in storage.
     * PUT/PATCH /etapas/{id}
     *
     * @param  int $id
     * @param UpdateEtapaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEtapaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Etapa $etapa */
        $etapa = $this->etapaRepository->findWithoutFail($id);

        if (empty($etapa)) {
            return $this->sendError('Etapa not found');
        }

        $etapa = $this->etapaRepository->update($input, $id);

        return $this->sendResponse($etapa->toArray(), 'Etapa updated successfully');
    }

    /**
     * Remove the specified Etapa from storage.
     * DELETE /etapas/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Etapa $etapa */
        $etapa = $this->etapaRepository->findWithoutFail($id);

        if (empty($etapa)) {
            return $this->sendError('Etapa not found');
        }

        $etapa->delete();

        return $this->sendResponse($id, 'Etapa deleted successfully');
    }
}

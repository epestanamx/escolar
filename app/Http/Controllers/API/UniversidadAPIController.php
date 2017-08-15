<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateUniversidadAPIRequest;
use App\Http\Requests\API\UpdateUniversidadAPIRequest;
use App\Models\Universidad;
use App\Repositories\UniversidadRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class UniversidadController
 * @package App\Http\Controllers\API
 */

class UniversidadAPIController extends AppBaseController
{
    /** @var  UniversidadRepository */
    private $universidadRepository;

    public function __construct(UniversidadRepository $universidadRepo)
    {
        $this->universidadRepository = $universidadRepo;
    }

    /**
     * Display a listing of the Universidad.
     * GET|HEAD /universidads
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->universidadRepository->pushCriteria(new RequestCriteria($request));
        $this->universidadRepository->pushCriteria(new LimitOffsetCriteria($request));
        $universidads = $this->universidadRepository->all();

        return $this->sendResponse($universidads->toArray(), 'Universidads retrieved successfully');
    }

    /**
     * Store a newly created Universidad in storage.
     * POST /universidads
     *
     * @param CreateUniversidadAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateUniversidadAPIRequest $request)
    {
        $input = $request->all();

        $universidads = $this->universidadRepository->create($input);

        return $this->sendResponse($universidads->toArray(), 'Universidad saved successfully');
    }

    /**
     * Display the specified Universidad.
     * GET|HEAD /universidads/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Universidad $universidad */
        $universidad = $this->universidadRepository->findWithoutFail($id);

        if (empty($universidad)) {
            return $this->sendError('Universidad not found');
        }

        return $this->sendResponse($universidad->toArray(), 'Universidad retrieved successfully');
    }

    /**
     * Update the specified Universidad in storage.
     * PUT/PATCH /universidads/{id}
     *
     * @param  int $id
     * @param UpdateUniversidadAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUniversidadAPIRequest $request)
    {
        $input = $request->all();

        /** @var Universidad $universidad */
        $universidad = $this->universidadRepository->findWithoutFail($id);

        if (empty($universidad)) {
            return $this->sendError('Universidad not found');
        }

        $universidad = $this->universidadRepository->update($input, $id);

        return $this->sendResponse($universidad->toArray(), 'Universidad updated successfully');
    }

    /**
     * Remove the specified Universidad from storage.
     * DELETE /universidads/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Universidad $universidad */
        $universidad = $this->universidadRepository->findWithoutFail($id);

        if (empty($universidad)) {
            return $this->sendError('Universidad not found');
        }

        $universidad->delete();

        return $this->sendResponse($id, 'Universidad deleted successfully');
    }
}

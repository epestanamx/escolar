<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProyectoAPIRequest;
use App\Http\Requests\API\UpdateProyectoAPIRequest;
use App\Models\Proyecto;
use App\Repositories\ProyectoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ProyectoController
 * @package App\Http\Controllers\API
 */

class ProyectoAPIController extends AppBaseController
{
    /** @var  ProyectoRepository */
    private $proyectoRepository;

    public function __construct(ProyectoRepository $proyectoRepo)
    {
        $this->proyectoRepository = $proyectoRepo;
    }

    /**
     * Display a listing of the Proyecto.
     * GET|HEAD /proyectos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->proyectoRepository->pushCriteria(new RequestCriteria($request));
        $this->proyectoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $proyectos = $this->proyectoRepository->all();

        return $this->sendResponse($proyectos->toArray(), 'Proyectos retrieved successfully');
    }

    /**
     * Store a newly created Proyecto in storage.
     * POST /proyectos
     *
     * @param CreateProyectoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProyectoAPIRequest $request)
    {
        $input = $request->all();

        $proyectos = $this->proyectoRepository->create($input);

        return $this->sendResponse($proyectos->toArray(), 'Proyecto saved successfully');
    }

    /**
     * Display the specified Proyecto.
     * GET|HEAD /proyectos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Proyecto $proyecto */
        $proyecto = $this->proyectoRepository->findWithoutFail($id);

        if (empty($proyecto)) {
            return $this->sendError('Proyecto not found');
        }

        return $this->sendResponse($proyecto->toArray(), 'Proyecto retrieved successfully');
    }

    /**
     * Update the specified Proyecto in storage.
     * PUT/PATCH /proyectos/{id}
     *
     * @param  int $id
     * @param UpdateProyectoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProyectoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Proyecto $proyecto */
        $proyecto = $this->proyectoRepository->findWithoutFail($id);

        if (empty($proyecto)) {
            return $this->sendError('Proyecto not found');
        }

        $proyecto = $this->proyectoRepository->update($input, $id);

        return $this->sendResponse($proyecto->toArray(), 'Proyecto updated successfully');
    }

    /**
     * Remove the specified Proyecto from storage.
     * DELETE /proyectos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Proyecto $proyecto */
        $proyecto = $this->proyectoRepository->findWithoutFail($id);

        if (empty($proyecto)) {
            return $this->sendError('Proyecto not found');
        }

        $proyecto->delete();

        return $this->sendResponse($id, 'Proyecto deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAsesorAcademicoAPIRequest;
use App\Http\Requests\API\UpdateAsesorAcademicoAPIRequest;
use App\Models\AsesorAcademico;
use App\Repositories\AsesorAcademicoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class AsesorAcademicoController
 * @package App\Http\Controllers\API
 */

class AsesorAcademicoAPIController extends AppBaseController
{
    /** @var  AsesorAcademicoRepository */
    private $asesorAcademicoRepository;

    public function __construct(AsesorAcademicoRepository $asesorAcademicoRepo)
    {
        $this->asesorAcademicoRepository = $asesorAcademicoRepo;
    }

    /**
     * Display a listing of the AsesorAcademico.
     * GET|HEAD /asesorAcademicos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->asesorAcademicoRepository->pushCriteria(new RequestCriteria($request));
        $this->asesorAcademicoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $asesorAcademicos = $this->asesorAcademicoRepository->all();

        return $this->sendResponse($asesorAcademicos->toArray(), 'Asesor Academicos retrieved successfully');
    }

    /**
     * Store a newly created AsesorAcademico in storage.
     * POST /asesorAcademicos
     *
     * @param CreateAsesorAcademicoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateAsesorAcademicoAPIRequest $request)
    {
        $input = $request->all();

        $asesorAcademicos = $this->asesorAcademicoRepository->create($input);

        return $this->sendResponse($asesorAcademicos->toArray(), 'Asesor Academico saved successfully');
    }

    /**
     * Display the specified AsesorAcademico.
     * GET|HEAD /asesorAcademicos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var AsesorAcademico $asesorAcademico */
        $asesorAcademico = $this->asesorAcademicoRepository->findWithoutFail($id);

        if (empty($asesorAcademico)) {
            return $this->sendError('Asesor Academico not found');
        }

        return $this->sendResponse($asesorAcademico->toArray(), 'Asesor Academico retrieved successfully');
    }

    /**
     * Update the specified AsesorAcademico in storage.
     * PUT/PATCH /asesorAcademicos/{id}
     *
     * @param  int $id
     * @param UpdateAsesorAcademicoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAsesorAcademicoAPIRequest $request)
    {
        $input = $request->all();

        /** @var AsesorAcademico $asesorAcademico */
        $asesorAcademico = $this->asesorAcademicoRepository->findWithoutFail($id);

        if (empty($asesorAcademico)) {
            return $this->sendError('Asesor Academico not found');
        }

        $asesorAcademico = $this->asesorAcademicoRepository->update($input, $id);

        return $this->sendResponse($asesorAcademico->toArray(), 'AsesorAcademico updated successfully');
    }

    /**
     * Remove the specified AsesorAcademico from storage.
     * DELETE /asesorAcademicos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var AsesorAcademico $asesorAcademico */
        $asesorAcademico = $this->asesorAcademicoRepository->findWithoutFail($id);

        if (empty($asesorAcademico)) {
            return $this->sendError('Asesor Academico not found');
        }

        $asesorAcademico->delete();

        return $this->sendResponse($id, 'Asesor Academico deleted successfully');
    }
}

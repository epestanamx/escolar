<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAsesorEmpresarialAPIRequest;
use App\Http\Requests\API\UpdateAsesorEmpresarialAPIRequest;
use App\Models\AsesorEmpresarial;
use App\Repositories\AsesorEmpresarialRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class AsesorEmpresarialController
 * @package App\Http\Controllers\API
 */

class AsesorEmpresarialAPIController extends AppBaseController
{
    /** @var  AsesorEmpresarialRepository */
    private $asesorEmpresarialRepository;

    public function __construct(AsesorEmpresarialRepository $asesorEmpresarialRepo)
    {
        $this->asesorEmpresarialRepository = $asesorEmpresarialRepo;
    }

    /**
     * Display a listing of the AsesorEmpresarial.
     * GET|HEAD /asesorEmpresarials
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->asesorEmpresarialRepository->pushCriteria(new RequestCriteria($request));
        $this->asesorEmpresarialRepository->pushCriteria(new LimitOffsetCriteria($request));
        $asesorEmpresarials = $this->asesorEmpresarialRepository->all();

        return $this->sendResponse($asesorEmpresarials->toArray(), 'Asesor Empresarials retrieved successfully');
    }

    /**
     * Store a newly created AsesorEmpresarial in storage.
     * POST /asesorEmpresarials
     *
     * @param CreateAsesorEmpresarialAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateAsesorEmpresarialAPIRequest $request)
    {
        $input = $request->all();

        $asesorEmpresarials = $this->asesorEmpresarialRepository->create($input);

        return $this->sendResponse($asesorEmpresarials->toArray(), 'Asesor Empresarial saved successfully');
    }

    /**
     * Display the specified AsesorEmpresarial.
     * GET|HEAD /asesorEmpresarials/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var AsesorEmpresarial $asesorEmpresarial */
        $asesorEmpresarial = $this->asesorEmpresarialRepository->findWithoutFail($id);

        if (empty($asesorEmpresarial)) {
            return $this->sendError('Asesor Empresarial not found');
        }

        return $this->sendResponse($asesorEmpresarial->toArray(), 'Asesor Empresarial retrieved successfully');
    }

    /**
     * Update the specified AsesorEmpresarial in storage.
     * PUT/PATCH /asesorEmpresarials/{id}
     *
     * @param  int $id
     * @param UpdateAsesorEmpresarialAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAsesorEmpresarialAPIRequest $request)
    {
        $input = $request->all();

        /** @var AsesorEmpresarial $asesorEmpresarial */
        $asesorEmpresarial = $this->asesorEmpresarialRepository->findWithoutFail($id);

        if (empty($asesorEmpresarial)) {
            return $this->sendError('Asesor Empresarial not found');
        }

        $asesorEmpresarial = $this->asesorEmpresarialRepository->update($input, $id);

        return $this->sendResponse($asesorEmpresarial->toArray(), 'AsesorEmpresarial updated successfully');
    }

    /**
     * Remove the specified AsesorEmpresarial from storage.
     * DELETE /asesorEmpresarials/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var AsesorEmpresarial $asesorEmpresarial */
        $asesorEmpresarial = $this->asesorEmpresarialRepository->findWithoutFail($id);

        if (empty($asesorEmpresarial)) {
            return $this->sendError('Asesor Empresarial not found');
        }

        $asesorEmpresarial->delete();

        return $this->sendResponse($id, 'Asesor Empresarial deleted successfully');
    }
}

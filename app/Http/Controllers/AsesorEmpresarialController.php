<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAsesorEmpresarialRequest;
use App\Http\Requests\UpdateAsesorEmpresarialRequest;
use App\Repositories\AsesorEmpresarialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AsesorEmpresarialController extends AppBaseController
{
    /** @var  AsesorEmpresarialRepository */
    private $asesorEmpresarialRepository;

    public function __construct(AsesorEmpresarialRepository $asesorEmpresarialRepo)
    {
        $this->asesorEmpresarialRepository = $asesorEmpresarialRepo;
    }

    /**
     * Display a listing of the AsesorEmpresarial.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->verificarPermiso('ver_asesores_empresariales');

        $this->asesorEmpresarialRepository->pushCriteria(new RequestCriteria($request));
        $asesorEmpresarials = $this->asesorEmpresarialRepository->all();

        return view('asesor_empresarials.index')
            ->with('asesorEmpresarials', $asesorEmpresarials);
    }

    /**
     * Show the form for creating a new AsesorEmpresarial.
     *
     * @return Response
     */
    public function create()
    {
        $this->verificarPermiso('agregar_asesores_empresariales');

        return view('asesor_empresarials.create');
    }

    /**
     * Store a newly created AsesorEmpresarial in storage.
     *
     * @param CreateAsesorEmpresarialRequest $request
     *
     * @return Response
     */
    public function store(CreateAsesorEmpresarialRequest $request)
    {
        $this->verificarPermiso('agregar_asesores_empresariales');

        $input = $request->all();

        $asesorEmpresarial = $this->asesorEmpresarialRepository->create($input);

        Flash::success('Asesor Empresarial saved successfully.');

        return redirect(route('asesores-empresariales.index'));
    }

    /**
     * Display the specified AsesorEmpresarial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $this->verificarPermiso('ver_asesores_empresariales');

        $asesorEmpresarial = $this->asesorEmpresarialRepository->findWithoutFail($id);

        if (empty($asesorEmpresarial)) {
            Flash::error('Asesor Empresarial not found');

            return redirect(route('asesores-empresariales.index'));
        }

        return view('asesor_empresarials.show')->with('asesorEmpresarial', $asesorEmpresarial);
    }

    /**
     * Show the form for editing the specified AsesorEmpresarial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $this->verificarPermiso('modificar_asesores_empresariales');

        $asesorEmpresarial = $this->asesorEmpresarialRepository->findWithoutFail($id);

        if (empty($asesorEmpresarial)) {
            Flash::error('Asesor Empresarial not found');

            return redirect(route('asesores-empresariales.index'));
        }

        return view('asesor_empresarials.edit')->with('asesorEmpresarial', $asesorEmpresarial);
    }

    /**
     * Update the specified AsesorEmpresarial in storage.
     *
     * @param  int              $id
     * @param UpdateAsesorEmpresarialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAsesorEmpresarialRequest $request)
    {
        $this->verificarPermiso('modificar_asesores_empresariales');

        $asesorEmpresarial = $this->asesorEmpresarialRepository->findWithoutFail($id);

        if (empty($asesorEmpresarial)) {
            Flash::error('Asesor Empresarial not found');

            return redirect(route('asesores-empresariales.index'));
        }

        $asesorEmpresarial = $this->asesorEmpresarialRepository->update($request->all(), $id);

        Flash::success('Asesor Empresarial updated successfully.');

        return redirect(route('asesores-empresariales.index'));
    }

    /**
     * Remove the specified AsesorEmpresarial from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $this->verificarPermiso('eliminar_asesores_empresariales');

        $asesorEmpresarial = $this->asesorEmpresarialRepository->findWithoutFail($id);

        if (empty($asesorEmpresarial)) {
            Flash::error('Asesor Empresarial not found');

            return redirect(route('asesores-empresariales.index'));
        }

        $this->asesorEmpresarialRepository->delete($id);

        Flash::success('Asesor Empresarial deleted successfully.');

        return redirect(route('asesores-empresariales.index'));
    }
}

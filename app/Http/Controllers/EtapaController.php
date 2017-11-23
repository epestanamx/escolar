<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEtapaRequest;
use App\Http\Requests\UpdateEtapaRequest;
use App\Repositories\EtapaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EtapaController extends AppBaseController
{
    /** @var  EtapaRepository */
    private $etapaRepository;

    public function __construct(EtapaRepository $etapaRepo)
    {
        $this->etapaRepository = $etapaRepo;
    }

    /**
     * Display a listing of the Etapa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->verificarPermiso('ver_etapas_de_proyectos');

        $this->etapaRepository->pushCriteria(new RequestCriteria($request));
        $etapas = $this->etapaRepository->all();

        return view('etapas.index')
            ->with('etapas', $etapas);
    }

    /**
     * Show the form for creating a new Etapa.
     *
     * @return Response
     */
    public function create()
    {
        $this->verificarPermiso('agregar_etapas_de_proyectos');

        return view('etapas.create');
    }

    /**
     * Store a newly created Etapa in storage.
     *
     * @param CreateEtapaRequest $request
     *
     * @return Response
     */
    public function store(CreateEtapaRequest $request)
    {
        $this->verificarPermiso('agregar_etapas_de_proyectos');

        $input = $request->all();

        $etapa = $this->etapaRepository->create($input);

        Flash::success('Etapa saved successfully.');

        return redirect(route('etapas.index'));
    }

    /**
     * Display the specified Etapa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $this->verificarPermiso('ver_etapas_de_proyectos');

        $etapa = $this->etapaRepository->findWithoutFail($id);

        if (empty($etapa)) {
            Flash::error('Etapa not found');

            return redirect(route('etapas.index'));
        }

        return view('etapas.show')->with('etapa', $etapa);
    }

    /**
     * Show the form for editing the specified Etapa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $this->verificarPermiso('modificar_etapas_de_proyectos');

        $etapa = $this->etapaRepository->findWithoutFail($id);

        if (empty($etapa)) {
            Flash::error('Etapa not found');

            return redirect(route('etapas.index'));
        }

        return view('etapas.edit')->with('etapa', $etapa);
    }

    /**
     * Update the specified Etapa in storage.
     *
     * @param  int              $id
     * @param UpdateEtapaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEtapaRequest $request)
    {
        $this->verificarPermiso('modificar_etapas_de_proyectos');

        $etapa = $this->etapaRepository->findWithoutFail($id);

        if (empty($etapa)) {
            Flash::error('Etapa not found');

            return redirect(route('etapas.index'));
        }

        $etapa = $this->etapaRepository->update($request->all(), $id);

        Flash::success('Etapa updated successfully.');

        return redirect(route('etapas.index'));
    }

    /**
     * Remove the specified Etapa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $this->verificarPermiso('eliminar_etapas_de_proyectos');

        $etapa = $this->etapaRepository->findWithoutFail($id);

        if (empty($etapa)) {
            Flash::error('Etapa not found');

            return redirect(route('etapas.index'));
        }

        $this->etapaRepository->delete($id);

        Flash::success('Etapa deleted successfully.');

        return redirect(route('etapas.index'));
    }
}

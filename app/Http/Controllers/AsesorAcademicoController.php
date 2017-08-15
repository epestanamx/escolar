<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAsesorAcademicoRequest;
use App\Http\Requests\UpdateAsesorAcademicoRequest;
use App\Repositories\AsesorAcademicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AsesorAcademicoController extends AppBaseController
{
    /** @var  AsesorAcademicoRepository */
    private $asesorAcademicoRepository;

    public function __construct(AsesorAcademicoRepository $asesorAcademicoRepo)
    {
        $this->asesorAcademicoRepository = $asesorAcademicoRepo;
    }

    /**
     * Display a listing of the AsesorAcademico.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->asesorAcademicoRepository->pushCriteria(new RequestCriteria($request));
        $asesorAcademicos = $this->asesorAcademicoRepository->all();

        return view('asesor_academicos.index')
            ->with('asesorAcademicos', $asesorAcademicos);
    }

    /**
     * Show the form for creating a new AsesorAcademico.
     *
     * @return Response
     */
    public function create()
    {
        return view('asesor_academicos.create');
    }

    /**
     * Store a newly created AsesorAcademico in storage.
     *
     * @param CreateAsesorAcademicoRequest $request
     *
     * @return Response
     */
    public function store(CreateAsesorAcademicoRequest $request)
    {
        $input = $request->all();

        $asesorAcademico = $this->asesorAcademicoRepository->create($input);

        Flash::success('Asesor Academico saved successfully.');

        return redirect(route('asesorAcademicos.index'));
    }

    /**
     * Display the specified AsesorAcademico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $asesorAcademico = $this->asesorAcademicoRepository->findWithoutFail($id);

        if (empty($asesorAcademico)) {
            Flash::error('Asesor Academico not found');

            return redirect(route('asesorAcademicos.index'));
        }

        return view('asesor_academicos.show')->with('asesorAcademico', $asesorAcademico);
    }

    /**
     * Show the form for editing the specified AsesorAcademico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $asesorAcademico = $this->asesorAcademicoRepository->findWithoutFail($id);

        if (empty($asesorAcademico)) {
            Flash::error('Asesor Academico not found');

            return redirect(route('asesorAcademicos.index'));
        }

        return view('asesor_academicos.edit')->with('asesorAcademico', $asesorAcademico);
    }

    /**
     * Update the specified AsesorAcademico in storage.
     *
     * @param  int              $id
     * @param UpdateAsesorAcademicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAsesorAcademicoRequest $request)
    {
        $asesorAcademico = $this->asesorAcademicoRepository->findWithoutFail($id);

        if (empty($asesorAcademico)) {
            Flash::error('Asesor Academico not found');

            return redirect(route('asesorAcademicos.index'));
        }

        $asesorAcademico = $this->asesorAcademicoRepository->update($request->all(), $id);

        Flash::success('Asesor Academico updated successfully.');

        return redirect(route('asesorAcademicos.index'));
    }

    /**
     * Remove the specified AsesorAcademico from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $asesorAcademico = $this->asesorAcademicoRepository->findWithoutFail($id);

        if (empty($asesorAcademico)) {
            Flash::error('Asesor Academico not found');

            return redirect(route('asesorAcademicos.index'));
        }

        $this->asesorAcademicoRepository->delete($id);

        Flash::success('Asesor Academico deleted successfully.');

        return redirect(route('asesorAcademicos.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstadiasRequest;
use App\Http\Requests\UpdateEstadiasRequest;
use App\Mail\EstadiaRegistro;
use App\Repositories\EstadiasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Mail;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EstadiasController extends AppBaseController
{
    /** @var  EstadiasRepository */
    private $estadiasRepository;

    public function __construct(EstadiasRepository $estadiasRepo)
    {
        $this->estadiasRepository = $estadiasRepo;
    }

    /**
     * Display a listing of the Estadias.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->verificarPermiso('ver_estadias');

        $this->estadiasRepository->pushCriteria(new RequestCriteria($request));
        $estadias = $this->estadiasRepository->all();

        return view('estadias.index')
            ->with('estadias', $estadias);
    }

    /**
     * Show the form for creating a new Estadias.
     *
     * @return Response
     */
    public function create()
    {
        $this->verificarPermiso('agregar_estadias');

        return view('estadias.create');
    }

    /**
     * Store a newly created Estadias in storage.
     *
     * @param CreateEstadiasRequest $request
     *
     * @return Response
     */
    public function store(CreateEstadiasRequest $request)
    {
        $this->verificarPermiso('agregar_estadias');

        $input = $request->all();

        $estadias = $this->estadiasRepository->create($input);

        Flash::success('Estadias saved successfully.');

        Mail::to($estadias->alumno->email_oficial)->send(new EstadiaRegistro($estadias));

        return redirect(route('estadias.index'));
    }

    /**
     * Display the specified Estadias.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $this->verificarPermiso('ver_estadias');

        $estadias = $this->estadiasRepository->findWithoutFail($id);

        if (empty($estadias)) {
            Flash::error('Estadias not found');

            return redirect(route('estadias.index'));
        }

        return view('estadias.show')->with('estadias', $estadias);
    }

    /**
     * Show the form for editing the specified Estadias.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $this->verificarPermiso('modificar_estadias');

        $estadias = $this->estadiasRepository->findWithoutFail($id);

        if (empty($estadias)) {
            Flash::error('Estadias not found');

            return redirect(route('estadias.index'));
        }

        return view('estadias.edit')->with('estadias', $estadias);
    }

    /**
     * Update the specified Estadias in storage.
     *
     * @param  int              $id
     * @param UpdateEstadiasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstadiasRequest $request)
    {
        $this->verificarPermiso('modificar_estadias');

        $estadias = $this->estadiasRepository->findWithoutFail($id);

        if (empty($estadias)) {
            Flash::error('Estadias not found');

            return redirect(route('estadias.index'));
        }

        $estadias = $this->estadiasRepository->update($request->all(), $id);

        Flash::success('Estadias updated successfully.');

        return redirect(route('estadias.index'));
    }

    /**
     * Remove the specified Estadias from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $this->verificarPermiso('eliminar_estadias');

        $estadias = $this->estadiasRepository->findWithoutFail($id);

        if (empty($estadias)) {
            Flash::error('Estadias not found');

            return redirect(route('estadias.index'));
        }

        $this->estadiasRepository->delete($id);

        Flash::success('Estadias deleted successfully.');

        return redirect(route('estadias.index'));
    }
}

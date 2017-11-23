<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCredencialRequest;
use App\Http\Requests\UpdateCredencialRequest;
use App\Mail\CredencialCreacion;
use App\Models\Credencial;
use App\Repositories\CredencialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Mail;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CredencialController extends AppBaseController
{
    /** @var  CredencialRepository */
    private $credencialRepository;

    public function __construct(CredencialRepository $credencialRepo)
    {
        $this->credencialRepository = $credencialRepo;
    }

    /**
     * Display a listing of the Credencial.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->verificarPermiso('ver_credenciales');

        $this->credencialRepository->pushCriteria(new RequestCriteria($request));
        $credencials = $this->credencialRepository->all();

        return view('credencials.index')
            ->with('credencials', $credencials);
    }

    /**
     * Show the form for creating a new Credencial.
     *
     * @return Response
     */
    public function create()
    {
        $this->verificarPermiso('agregar_credenciales');

        return view('credencials.create');
    }

    /**
     * Store a newly created Credencial in storage.
     *
     * @param CreateCredencialRequest $request
     *
     * @return Response
     */
    public function store(CreateCredencialRequest $request)
    {
        $this->verificarPermiso('agregar_credenciales');

        $input = $request->all();
        $input['estado'] = 'Pendiente';

        $credenciales = Credencial::where('idAlumno', '=', $input['idAlumno']);

        if (count($credenciales) >= 1) {
          $input['tipo'] = 'Reposición';
        } else {
          $input['tipo'] = 'Nueva';
        }

        $credencial = $this->credencialRepository->create($input);

        Mail::to($credencial->alumno->email_oficial)->send(new CredencialCreacion($credencial));

        Flash::success('Credencial saved successfully.');

        return redirect(route('credenciales.index'));
    }

    /**
     * Display the specified Credencial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $this->verificarPermiso('ver_credenciales');

        $credencial = $this->credencialRepository->findWithoutFail($id);

        if (empty($credencial)) {
            Flash::error('Credencial not found');

            return redirect(route('credenciales.index'));
        }

        return view('credencials.show')->with('credencial', $credencial);
    }

    /**
     * Show the form for editing the specified Credencial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $this->verificarPermiso('modificar_credenciales');

        $credencial = $this->credencialRepository->findWithoutFail($id);

        if (empty($credencial)) {
            Flash::error('Credencial not found');

            return redirect(route('credenciales.index'));
        }

        return view('credencials.edit')->with('credencial', $credencial);
    }

    /**
     * Update the specified Credencial in storage.
     *
     * @param  int              $id
     * @param UpdateCredencialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCredencialRequest $request)
    {
        $this->verificarPermiso('modificar_credenciales');

        $credencial = $this->credencialRepository->findWithoutFail($id);

        if (empty($credencial)) {
            Flash::error('Credencial not found');

            return redirect(route('credenciales.index'));
        }

        $credencial = $this->credencialRepository->update($request->all(), $id);

        Flash::success('Credencial updated successfully.');

        return redirect(route('credenciales.index'));
    }

    /**
     * Remove the specified Credencial from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $this->verificarPermiso('eliminar_credenciales');

        $credencial = $this->credencialRepository->findWithoutFail($id);

        if (empty($credencial)) {
            Flash::error('Credencial not found');

            return redirect(route('credenciales.index'));
        }

        $this->credencialRepository->delete($id);

        Flash::success('Credencial deleted successfully.');

        return redirect(route('credenciales.index'));
    }
}

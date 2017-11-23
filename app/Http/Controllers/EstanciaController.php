<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstanciaRequest;
use App\Http\Requests\UpdateEstanciaRequest;
use App\Mail\EstanciaRegistro;
use App\Repositories\EstanciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Mail;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EstanciaController extends AppBaseController
{
    /** @var  EstanciaRepository */
    private $estanciaRepository;

    public function __construct(EstanciaRepository $estanciaRepo)
    {
        $this->estanciaRepository = $estanciaRepo;
    }

    /**
     * Display a listing of the Estancia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->verificarPermiso('ver_credenciales');

        $this->estanciaRepository->pushCriteria(new RequestCriteria($request));
        $estancias = $this->estanciaRepository->all();

        return view('estancias.index')
            ->with('estancias', $estancias);
    }

    /**
     * Show the form for creating a new Estancia.
     *
     * @return Response
     */
    public function create()
    {
        $this->verificarPermiso('agregar_credenciales');

        return view('estancias.create');
    }

    /**
     * Store a newly created Estancia in storage.
     *
     * @param CreateEstanciaRequest $request
     *
     * @return Response
     */
    public function store(CreateEstanciaRequest $request)
    {
        $this->verificarPermiso('agregar_credenciales');

        $input = $request->all();

        $estancia = $this->estanciaRepository->create($input);

        Mail::to($estadias->alumno->email_oficial)->send(new EstanciaRegistro($estadias));

        Flash::success('Estancia saved successfully.');

        return redirect(route('estancias.index'));
    }

    /**
     * Display the specified Estancia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $this->verificarPermiso('ver_credenciales');
        $estancia = $this->estanciaRepository->findWithoutFail($id);

        if (empty($estancia)) {
            Flash::error('Estancia not found');

            return redirect(route('estancias.index'));
        }

        return view('estancias.show')->with('estancia', $estancia);
    }

    /**
     * Show the form for editing the specified Estancia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $this->verificarPermiso('modificar_credenciales');

        $estancia = $this->estanciaRepository->findWithoutFail($id);

        if (empty($estancia)) {
            Flash::error('Estancia not found');

            return redirect(route('estancias.index'));
        }

        return view('estancias.edit')->with('estancia', $estancia);
    }

    /**
     * Update the specified Estancia in storage.
     *
     * @param  int              $id
     * @param UpdateEstanciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstanciaRequest $request)
    {
        $this->verificarPermiso('modificar_credenciales');

        $estancia = $this->estanciaRepository->findWithoutFail($id);

        if (empty($estancia)) {
            Flash::error('Estancia not found');

            return redirect(route('estancias.index'));
        }

        $estancia = $this->estanciaRepository->update($request->all(), $id);

        Flash::success('Estancia updated successfully.');

        return redirect(route('estancias.index'));
    }

    /**
     * Remove the specified Estancia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $this->verificarPermiso('eliminar_credenciales');

        $estancia = $this->estanciaRepository->findWithoutFail($id);

        if (empty($estancia)) {
            Flash::error('Estancia not found');

            return redirect(route('estancias.index'));
        }

        $this->estanciaRepository->delete($id);

        Flash::success('Estancia deleted successfully.');

        return redirect(route('estancias.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUniversidadRequest;
use App\Http\Requests\UpdateUniversidadRequest;
use App\Repositories\UniversidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UniversidadController extends AppBaseController
{
    /** @var  UniversidadRepository */
    private $universidadRepository;

    public function __construct(UniversidadRepository $universidadRepo)
    {
        $this->universidadRepository = $universidadRepo;
    }

    /**
     * Display a listing of the Universidad.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->universidadRepository->pushCriteria(new RequestCriteria($request));
        $universidads = $this->universidadRepository->all();

        return view('universidads.index')
            ->with('universidads', $universidads);
    }

    /**
     * Show the form for creating a new Universidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('universidads.create');
    }

    /**
     * Store a newly created Universidad in storage.
     *
     * @param CreateUniversidadRequest $request
     *
     * @return Response
     */
    public function store(CreateUniversidadRequest $request)
    {
        $input = $request->all();

        $universidad = $this->universidadRepository->create($input);

        Flash::success('Universidad saved successfully.');

        return redirect(route('universidads.index'));
    }

    /**
     * Display the specified Universidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $universidad = $this->universidadRepository->findWithoutFail($id);

        if (empty($universidad)) {
            Flash::error('Universidad not found');

            return redirect(route('universidads.index'));
        }

        return view('universidads.show')->with('universidad', $universidad);
    }

    /**
     * Show the form for editing the specified Universidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $this->verificarPermiso('configuracion_universidad_modificar_datos');
        $universidad = $this->universidadRepository->findWithoutFail($id);

        if (empty($universidad)) {
            Flash::error('Universidad not found');

            return redirect(route('universidads.index'));
        }

        return view('universidads.edit')->with('universidad', $universidad);
    }

    /**
     * Update the specified Universidad in storage.
     *
     * @param  int              $id
     * @param UpdateUniversidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUniversidadRequest $request)
    {
        $this->verificarPermiso('configuracion_universidad_modificar_datos');
        
        $universidad = $this->universidadRepository->findWithoutFail($id);

        if (empty($universidad)) {
            Flash::error('Universidad not found');

            return redirect(route('universidads.index'));
        }

        $universidad = $this->universidadRepository->update($request->all(), $id);

        Flash::success('Universidad updated successfully.');

        return redirect(route('universidad.edit', ['id' => 1]));
    }

    /**
     * Remove the specified Universidad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $universidad = $this->universidadRepository->findWithoutFail($id);

        if (empty($universidad)) {
            Flash::error('Universidad not found');

            return redirect(route('universidads.index'));
        }

        $this->universidadRepository->delete($id);

        Flash::success('Universidad deleted successfully.');

        return redirect(route('universidads.index'));
    }
}

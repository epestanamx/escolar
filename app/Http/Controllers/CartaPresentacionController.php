<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCartaPresentacionRequest;
use App\Http\Requests\UpdateCartaPresentacionRequest;
use App\Mail\CartaPresentacionCreacion;
use App\Repositories\CartaPresentacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Mail;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CartaPresentacionController extends AppBaseController
{
    /** @var  CartaPresentacionRepository */
    private $cartaPresentacionRepository;

    public function __construct(CartaPresentacionRepository $cartaPresentacionRepo)
    {
        $this->cartaPresentacionRepository = $cartaPresentacionRepo;
    }

    /**
     * Display a listing of the CartaPresentacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cartaPresentacionRepository->pushCriteria(new RequestCriteria($request));
        $cartaPresentacions = $this->cartaPresentacionRepository->all();

        return view('carta_presentacions.index')
            ->with('cartaPresentacions', $cartaPresentacions);
    }

    /**
     * Show the form for creating a new CartaPresentacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('carta_presentacions.create');
    }

    /**
     * Store a newly created CartaPresentacion in storage.
     *
     * @param CreateCartaPresentacionRequest $request
     *
     * @return Response
     */
    public function store(CreateCartaPresentacionRequest $request)
    {
        $input = $request->all();

        $cartaPresentacion = $this->cartaPresentacionRepository->create($input);

        Mail::to($cartaPresentacion->alumno->email_oficial)->send(new CartaPresentacionCreacion($cartaPresentacion));

        Flash::success('Carta Presentacion saved successfully.');

        return redirect(route('cartas-presentacion.index'));
    }

    /**
     * Display the specified CartaPresentacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cartaPresentacion = $this->cartaPresentacionRepository->findWithoutFail($id);

        if (empty($cartaPresentacion)) {
            Flash::error('Carta Presentacion not found');

            return redirect(route('cartas-presentacion.index'));
        }

        return view('carta_presentacions.show')->with('cartaPresentacion', $cartaPresentacion);
    }

    /**
     * Show the form for editing the specified CartaPresentacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cartaPresentacion = $this->cartaPresentacionRepository->findWithoutFail($id);

        if (empty($cartaPresentacion)) {
            Flash::error('Carta Presentacion not found');

            return redirect(route('cartas-presentacion.index'));
        }

        return view('carta_presentacions.edit')->with('cartaPresentacion', $cartaPresentacion);
    }

    /**
     * Update the specified CartaPresentacion in storage.
     *
     * @param  int              $id
     * @param UpdateCartaPresentacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCartaPresentacionRequest $request)
    {
        $cartaPresentacion = $this->cartaPresentacionRepository->findWithoutFail($id);

        if (empty($cartaPresentacion)) {
            Flash::error('Carta Presentacion not found');

            return redirect(route('cartas-presentacion.index'));
        }

        $cartaPresentacion = $this->cartaPresentacionRepository->update($request->all(), $id);

        Flash::success('Carta Presentacion updated successfully.');

        return redirect(route('cartas-presentacion.index'));
    }

    /**
     * Remove the specified CartaPresentacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cartaPresentacion = $this->cartaPresentacionRepository->findWithoutFail($id);

        if (empty($cartaPresentacion)) {
            Flash::error('Carta Presentacion not found');

            return redirect(route('cartas-presentacion.index'));
        }

        $this->cartaPresentacionRepository->delete($id);

        Flash::success('Carta Presentacion deleted successfully.');

        return redirect(route('cartas-presentacion.index'));
    }
}

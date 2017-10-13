<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCartaPresentacionAPIRequest;
use App\Http\Requests\API\UpdateCartaPresentacionAPIRequest;
use App\Models\CartaPresentacion;
use App\Repositories\CartaPresentacionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class CartaPresentacionController
 * @package App\Http\Controllers\API
 */

class CartaPresentacionAPIController extends AppBaseController
{
    /** @var  CartaPresentacionRepository */
    private $cartaPresentacionRepository;

    public function __construct(CartaPresentacionRepository $cartaPresentacionRepo)
    {
        $this->cartaPresentacionRepository = $cartaPresentacionRepo;
    }

    /**
     * Display a listing of the CartaPresentacion.
     * GET|HEAD /cartaPresentacions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cartaPresentacionRepository->pushCriteria(new RequestCriteria($request));
        $this->cartaPresentacionRepository->pushCriteria(new LimitOffsetCriteria($request));
        $cartaPresentacions = $this->cartaPresentacionRepository->all();

        return $this->sendResponse($cartaPresentacions->toArray(), 'Carta Presentacions retrieved successfully');
    }

    /**
     * Store a newly created CartaPresentacion in storage.
     * POST /cartaPresentacions
     *
     * @param CreateCartaPresentacionAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCartaPresentacionAPIRequest $request)
    {
        $input = $request->all();

        $cartaPresentacions = $this->cartaPresentacionRepository->create($input);

        return $this->sendResponse($cartaPresentacions->toArray(), 'Carta Presentacion saved successfully');
    }

    /**
     * Display the specified CartaPresentacion.
     * GET|HEAD /cartaPresentacions/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var CartaPresentacion $cartaPresentacion */
        $cartaPresentacion = $this->cartaPresentacionRepository->findWithoutFail($id);

        if (empty($cartaPresentacion)) {
            return $this->sendError('Carta Presentacion not found');
        }

        return $this->sendResponse($cartaPresentacion->toArray(), 'Carta Presentacion retrieved successfully');
    }

    /**
     * Update the specified CartaPresentacion in storage.
     * PUT/PATCH /cartaPresentacions/{id}
     *
     * @param  int $id
     * @param UpdateCartaPresentacionAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCartaPresentacionAPIRequest $request)
    {
        $input = $request->all();

        /** @var CartaPresentacion $cartaPresentacion */
        $cartaPresentacion = $this->cartaPresentacionRepository->findWithoutFail($id);

        if (empty($cartaPresentacion)) {
            return $this->sendError('Carta Presentacion not found');
        }

        $cartaPresentacion = $this->cartaPresentacionRepository->update($input, $id);

        return $this->sendResponse($cartaPresentacion->toArray(), 'CartaPresentacion updated successfully');
    }

    /**
     * Remove the specified CartaPresentacion from storage.
     * DELETE /cartaPresentacions/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var CartaPresentacion $cartaPresentacion */
        $cartaPresentacion = $this->cartaPresentacionRepository->findWithoutFail($id);

        if (empty($cartaPresentacion)) {
            return $this->sendError('Carta Presentacion not found');
        }

        $cartaPresentacion->delete();

        return $this->sendResponse($id, 'Carta Presentacion deleted successfully');
    }
}

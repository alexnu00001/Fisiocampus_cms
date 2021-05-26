<?php

namespace App\Http\Controllers;

use App\DataTables\TipoCongresoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTipoCongresoRequest;
use App\Http\Requests\UpdateTipoCongresoRequest;
use App\Repositories\TipoCongresoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TipoCongresoController extends AppBaseController
{
    /** @var  TipoCongresoRepository */
    private $tipoCongresoRepository;

    public function __construct(TipoCongresoRepository $tipoCongresoRepo)
    {
        $this->tipoCongresoRepository = $tipoCongresoRepo;
    }

    /**
     * Display a listing of the TipoCongreso.
     *
     * @param TipoCongresoDataTable $tipoCongresoDataTable
     * @return Response
     */
    public function index(TipoCongresoDataTable $tipoCongresoDataTable)
    {
        return $tipoCongresoDataTable->render('tipo_congresos.index');
    }

    /**
     * Show the form for creating a new TipoCongreso.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_congresos.create');
    }

    /**
     * Store a newly created TipoCongreso in storage.
     *
     * @param CreateTipoCongresoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoCongresoRequest $request)
    {
        $input = $request->all();

        $tipoCongreso = $this->tipoCongresoRepository->create($input);

        Flash::success('Tipo Congreso saved successfully.');

        return redirect(route('tipoCongresos.index'));
    }

    /**
     * Display the specified TipoCongreso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoCongreso = $this->tipoCongresoRepository->find($id);

        if (empty($tipoCongreso)) {
            Flash::error('Tipo Congreso not found');

            return redirect(route('tipoCongresos.index'));
        }

        return view('tipo_congresos.show')->with('tipoCongreso', $tipoCongreso);
    }

    /**
     * Show the form for editing the specified TipoCongreso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoCongreso = $this->tipoCongresoRepository->find($id);

        if (empty($tipoCongreso)) {
            Flash::error('Tipo Congreso not found');

            return redirect(route('tipoCongresos.index'));
        }

        return view('tipo_congresos.edit')->with('tipoCongreso', $tipoCongreso);
    }

    /**
     * Update the specified TipoCongreso in storage.
     *
     * @param  int              $id
     * @param UpdateTipoCongresoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoCongresoRequest $request)
    {
        $tipoCongreso = $this->tipoCongresoRepository->find($id);

        if (empty($tipoCongreso)) {
            Flash::error('Tipo Congreso not found');

            return redirect(route('tipoCongresos.index'));
        }

        $tipoCongreso = $this->tipoCongresoRepository->update($request->all(), $id);

        Flash::success('Tipo Congreso updated successfully.');

        return redirect(route('tipoCongresos.index'));
    }

    /**
     * Remove the specified TipoCongreso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoCongreso = $this->tipoCongresoRepository->find($id);

        if (empty($tipoCongreso)) {
            Flash::error('Tipo Congreso not found');

            return redirect(route('tipoCongresos.index'));
        }

        $this->tipoCongresoRepository->delete($id);

        Flash::success('Tipo Congreso deleted successfully.');

        return redirect(route('tipoCongresos.index'));
    }
}

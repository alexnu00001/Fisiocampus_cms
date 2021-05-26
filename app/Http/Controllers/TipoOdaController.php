<?php

namespace App\Http\Controllers;

use App\DataTables\TipoOdaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTipoOdaRequest;
use App\Http\Requests\UpdateTipoOdaRequest;
use App\Repositories\TipoOdaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TipoOdaController extends AppBaseController
{
    /** @var  TipoOdaRepository */
    private $tipoOdaRepository;

    public function __construct(TipoOdaRepository $tipoOdaRepo)
    {
        $this->tipoOdaRepository = $tipoOdaRepo;
    }

    /**
     * Display a listing of the TipoOda.
     *
     * @param TipoOdaDataTable $tipoOdaDataTable
     * @return Response
     */
    public function index(TipoOdaDataTable $tipoOdaDataTable)
    {
        return $tipoOdaDataTable->render('tipo_odas.index');
    }

    /**
     * Show the form for creating a new TipoOda.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_odas.create');
    }

    /**
     * Store a newly created TipoOda in storage.
     *
     * @param CreateTipoOdaRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoOdaRequest $request)
    {
        $input = $request->all();

        $tipoOda = $this->tipoOdaRepository->create($input);

        Flash::success('Tipo Oda saved successfully.');

        return redirect(route('tipoOdas.index'));
    }

    /**
     * Display the specified TipoOda.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoOda = $this->tipoOdaRepository->find($id);

        if (empty($tipoOda)) {
            Flash::error('Tipo Oda not found');

            return redirect(route('tipoOdas.index'));
        }

        return view('tipo_odas.show')->with('tipoOda', $tipoOda);
    }

    /**
     * Show the form for editing the specified TipoOda.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoOda = $this->tipoOdaRepository->find($id);

        if (empty($tipoOda)) {
            Flash::error('Tipo Oda not found');

            return redirect(route('tipoOdas.index'));
        }

        return view('tipo_odas.edit')->with('tipoOda', $tipoOda);
    }

    /**
     * Update the specified TipoOda in storage.
     *
     * @param  int              $id
     * @param UpdateTipoOdaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoOdaRequest $request)
    {
        $tipoOda = $this->tipoOdaRepository->find($id);

        if (empty($tipoOda)) {
            Flash::error('Tipo Oda not found');

            return redirect(route('tipoOdas.index'));
        }

        $tipoOda = $this->tipoOdaRepository->update($request->all(), $id);

        Flash::success('Tipo Oda updated successfully.');

        return redirect(route('tipoOdas.index'));
    }

    /**
     * Remove the specified TipoOda from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoOda = $this->tipoOdaRepository->find($id);

        if (empty($tipoOda)) {
            Flash::error('Tipo Oda not found');

            return redirect(route('tipoOdas.index'));
        }

        $this->tipoOdaRepository->delete($id);

        Flash::success('Tipo Oda deleted successfully.');

        return redirect(route('tipoOdas.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\DataTables\TipoOfertaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTipoOfertaRequest;
use App\Http\Requests\UpdateTipoOfertaRequest;
use App\Repositories\TipoOfertaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TipoOfertaController extends AppBaseController
{
    /** @var  TipoOfertaRepository */
    private $tipoOfertaRepository;

    public function __construct(TipoOfertaRepository $tipoOfertaRepo)
    {
        $this->tipoOfertaRepository = $tipoOfertaRepo;
    }

    /**
     * Display a listing of the TipoOferta.
     *
     * @param TipoOfertaDataTable $tipoOfertaDataTable
     * @return Response
     */
    public function index(TipoOfertaDataTable $tipoOfertaDataTable)
    {
        return $tipoOfertaDataTable->render('tipo_ofertas.index');
    }

    /**
     * Show the form for creating a new TipoOferta.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_ofertas.create');
    }

    /**
     * Store a newly created TipoOferta in storage.
     *
     * @param CreateTipoOfertaRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoOfertaRequest $request)
    {
        $input = $request->all();

        $tipoOferta = $this->tipoOfertaRepository->create($input);

        Flash::success('Tipo Oferta saved successfully.');

        return redirect(route('tipoOfertas.index'));
    }

    /**
     * Display the specified TipoOferta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoOferta = $this->tipoOfertaRepository->find($id);

        if (empty($tipoOferta)) {
            Flash::error('Tipo Oferta not found');

            return redirect(route('tipoOfertas.index'));
        }

        return view('tipo_ofertas.show')->with('tipoOferta', $tipoOferta);
    }

    /**
     * Show the form for editing the specified TipoOferta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoOferta = $this->tipoOfertaRepository->find($id);

        if (empty($tipoOferta)) {
            Flash::error('Tipo Oferta not found');

            return redirect(route('tipoOfertas.index'));
        }

        return view('tipo_ofertas.edit')->with('tipoOferta', $tipoOferta);
    }

    /**
     * Update the specified TipoOferta in storage.
     *
     * @param  int              $id
     * @param UpdateTipoOfertaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoOfertaRequest $request)
    {
        $tipoOferta = $this->tipoOfertaRepository->find($id);

        if (empty($tipoOferta)) {
            Flash::error('Tipo Oferta not found');

            return redirect(route('tipoOfertas.index'));
        }

        $tipoOferta = $this->tipoOfertaRepository->update($request->all(), $id);

        Flash::success('Tipo Oferta updated successfully.');

        return redirect(route('tipoOfertas.index'));
    }

    /**
     * Remove the specified TipoOferta from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoOferta = $this->tipoOfertaRepository->find($id);

        if (empty($tipoOferta)) {
            Flash::error('Tipo Oferta not found');

            return redirect(route('tipoOfertas.index'));
        }

        $this->tipoOfertaRepository->delete($id);

        Flash::success('Tipo Oferta deleted successfully.');

        return redirect(route('tipoOfertas.index'));
    }
}

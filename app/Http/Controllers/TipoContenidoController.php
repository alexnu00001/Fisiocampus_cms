<?php

namespace App\Http\Controllers;

use App\DataTables\TipoContenidoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTipoContenidoRequest;
use App\Http\Requests\UpdateTipoContenidoRequest;
use App\Repositories\TipoContenidoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TipoContenidoController extends AppBaseController
{
    /** @var  TipoContenidoRepository */
    private $tipoContenidoRepository;

    public function __construct(TipoContenidoRepository $tipoContenidoRepo)
    {
        $this->tipoContenidoRepository = $tipoContenidoRepo;
    }

    /**
     * Display a listing of the TipoContenido.
     *
     * @param TipoContenidoDataTable $tipoContenidoDataTable
     * @return Response
     */
    public function index(TipoContenidoDataTable $tipoContenidoDataTable)
    {
        return $tipoContenidoDataTable->render('tipo_contenidos.index');
    }

    /**
     * Show the form for creating a new TipoContenido.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_contenidos.create');
    }

    /**
     * Store a newly created TipoContenido in storage.
     *
     * @param CreateTipoContenidoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoContenidoRequest $request)
    {
        $input = $request->all();

        $tipoContenido = $this->tipoContenidoRepository->create($input);

        Flash::success('Tipo Contenido saved successfully.');

        return redirect(route('tipoContenidos.index'));
    }

    /**
     * Display the specified TipoContenido.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoContenido = $this->tipoContenidoRepository->find($id);

        if (empty($tipoContenido)) {
            Flash::error('Tipo Contenido not found');

            return redirect(route('tipoContenidos.index'));
        }

        return view('tipo_contenidos.show')->with('tipoContenido', $tipoContenido);
    }

    /**
     * Show the form for editing the specified TipoContenido.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoContenido = $this->tipoContenidoRepository->find($id);

        if (empty($tipoContenido)) {
            Flash::error('Tipo Contenido not found');

            return redirect(route('tipoContenidos.index'));
        }

        return view('tipo_contenidos.edit')->with('tipoContenido', $tipoContenido);
    }

    /**
     * Update the specified TipoContenido in storage.
     *
     * @param  int              $id
     * @param UpdateTipoContenidoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoContenidoRequest $request)
    {
        $tipoContenido = $this->tipoContenidoRepository->find($id);

        if (empty($tipoContenido)) {
            Flash::error('Tipo Contenido not found');

            return redirect(route('tipoContenidos.index'));
        }

        $tipoContenido = $this->tipoContenidoRepository->update($request->all(), $id);

        Flash::success('Tipo Contenido updated successfully.');

        return redirect(route('tipoContenidos.index'));
    }

    /**
     * Remove the specified TipoContenido from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoContenido = $this->tipoContenidoRepository->find($id);

        if (empty($tipoContenido)) {
            Flash::error('Tipo Contenido not found');

            return redirect(route('tipoContenidos.index'));
        }

        $this->tipoContenidoRepository->delete($id);

        Flash::success('Tipo Contenido deleted successfully.');

        return redirect(route('tipoContenidos.index'));
    }
}

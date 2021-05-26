<?php

namespace App\Http\Controllers;

use App\DataTables\Inscripcion_tipoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateInscripcion_tipoRequest;
use App\Http\Requests\UpdateInscripcion_tipoRequest;
use App\Repositories\Inscripcion_tipoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Inscripcion_tipoController extends AppBaseController
{
    /** @var  Inscripcion_tipoRepository */
    private $inscripcionTipoRepository;

    public function __construct(Inscripcion_tipoRepository $inscripcionTipoRepo)
    {
        $this->inscripcionTipoRepository = $inscripcionTipoRepo;
    }

    /**
     * Display a listing of the Inscripcion_tipo.
     *
     * @param Inscripcion_tipoDataTable $inscripcionTipoDataTable
     * @return Response
     */
    public function index(Inscripcion_tipoDataTable $inscripcionTipoDataTable)
    {
        return $inscripcionTipoDataTable->render('inscripcion_tipos.index');
    }

    /**
     * Show the form for creating a new Inscripcion_tipo.
     *
     * @return Response
     */
    public function create()
    {
        return view('inscripcion_tipos.create');
    }

    /**
     * Store a newly created Inscripcion_tipo in storage.
     *
     * @param CreateInscripcion_tipoRequest $request
     *
     * @return Response
     */
    public function store(CreateInscripcion_tipoRequest $request)
    {
        $input = $request->all();

        $inscripcionTipo = $this->inscripcionTipoRepository->create($input);

        Flash::success('Inscripcion Tipo saved successfully.');

        return redirect(route('inscripcionTipos.index'));
    }

    /**
     * Display the specified Inscripcion_tipo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inscripcionTipo = $this->inscripcionTipoRepository->find($id);

        if (empty($inscripcionTipo)) {
            Flash::error('Inscripcion Tipo not found');

            return redirect(route('inscripcionTipos.index'));
        }

        return view('inscripcion_tipos.show')->with('inscripcionTipo', $inscripcionTipo);
    }

    /**
     * Show the form for editing the specified Inscripcion_tipo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inscripcionTipo = $this->inscripcionTipoRepository->find($id);

        if (empty($inscripcionTipo)) {
            Flash::error('Inscripcion Tipo not found');

            return redirect(route('inscripcionTipos.index'));
        }

        return view('inscripcion_tipos.edit')->with('inscripcionTipo', $inscripcionTipo);
    }

    /**
     * Update the specified Inscripcion_tipo in storage.
     *
     * @param  int              $id
     * @param UpdateInscripcion_tipoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInscripcion_tipoRequest $request)
    {
        $inscripcionTipo = $this->inscripcionTipoRepository->find($id);

        if (empty($inscripcionTipo)) {
            Flash::error('Inscripcion Tipo not found');

            return redirect(route('inscripcionTipos.index'));
        }

        $inscripcionTipo = $this->inscripcionTipoRepository->update($request->all(), $id);

        Flash::success('Inscripcion Tipo updated successfully.');

        return redirect(route('inscripcionTipos.index'));
    }

    /**
     * Remove the specified Inscripcion_tipo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inscripcionTipo = $this->inscripcionTipoRepository->find($id);

        if (empty($inscripcionTipo)) {
            Flash::error('Inscripcion Tipo not found');

            return redirect(route('inscripcionTipos.index'));
        }

        $this->inscripcionTipoRepository->delete($id);

        Flash::success('Inscripcion Tipo deleted successfully.');

        return redirect(route('inscripcionTipos.index'));
    }
}

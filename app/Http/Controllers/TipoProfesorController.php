<?php

namespace App\Http\Controllers;

use App\DataTables\TipoProfesorDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTipoProfesorRequest;
use App\Http\Requests\UpdateTipoProfesorRequest;
use App\Repositories\TipoProfesorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TipoProfesorController extends AppBaseController
{
    /** @var  TipoProfesorRepository */
    private $tipoProfesorRepository;

    public function __construct(TipoProfesorRepository $tipoProfesorRepo)
    {
        $this->tipoProfesorRepository = $tipoProfesorRepo;
    }

    /**
     * Display a listing of the TipoProfesor.
     *
     * @param TipoProfesorDataTable $tipoProfesorDataTable
     * @return Response
     */
    public function index(TipoProfesorDataTable $tipoProfesorDataTable)
    {
        return $tipoProfesorDataTable->render('tipo_profesors.index');
    }

    /**
     * Show the form for creating a new TipoProfesor.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_profesors.create');
    }

    /**
     * Store a newly created TipoProfesor in storage.
     *
     * @param CreateTipoProfesorRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoProfesorRequest $request)
    {
        $input = $request->all();

        $tipoProfesor = $this->tipoProfesorRepository->create($input);

        Flash::success('Tipo Profesor saved successfully.');

        return redirect(route('tipoProfesors.index'));
    }

    /**
     * Display the specified TipoProfesor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoProfesor = $this->tipoProfesorRepository->find($id);

        if (empty($tipoProfesor)) {
            Flash::error('Tipo Profesor not found');

            return redirect(route('tipoProfesors.index'));
        }

        return view('tipo_profesors.show')->with('tipoProfesor', $tipoProfesor);
    }

    /**
     * Show the form for editing the specified TipoProfesor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoProfesor = $this->tipoProfesorRepository->find($id);

        if (empty($tipoProfesor)) {
            Flash::error('Tipo Profesor not found');

            return redirect(route('tipoProfesors.index'));
        }

        return view('tipo_profesors.edit')->with('tipoProfesor', $tipoProfesor);
    }

    /**
     * Update the specified TipoProfesor in storage.
     *
     * @param  int              $id
     * @param UpdateTipoProfesorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoProfesorRequest $request)
    {
        $tipoProfesor = $this->tipoProfesorRepository->find($id);

        if (empty($tipoProfesor)) {
            Flash::error('Tipo Profesor not found');

            return redirect(route('tipoProfesors.index'));
        }

        $tipoProfesor = $this->tipoProfesorRepository->update($request->all(), $id);

        Flash::success('Tipo Profesor updated successfully.');

        return redirect(route('tipoProfesors.index'));
    }

    /**
     * Remove the specified TipoProfesor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoProfesor = $this->tipoProfesorRepository->find($id);

        if (empty($tipoProfesor)) {
            Flash::error('Tipo Profesor not found');

            return redirect(route('tipoProfesors.index'));
        }

        $this->tipoProfesorRepository->delete($id);

        Flash::success('Tipo Profesor deleted successfully.');

        return redirect(route('tipoProfesors.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\DataTables\TipoAlumnoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTipoAlumnoRequest;
use App\Http\Requests\UpdateTipoAlumnoRequest;
use App\Repositories\TipoAlumnoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TipoAlumnoController extends AppBaseController
{
    /** @var  TipoAlumnoRepository */
    private $tipoAlumnoRepository;

    public function __construct(TipoAlumnoRepository $tipoAlumnoRepo)
    {
        $this->tipoAlumnoRepository = $tipoAlumnoRepo;
    }

    /**
     * Display a listing of the TipoAlumno.
     *
     * @param TipoAlumnoDataTable $tipoAlumnoDataTable
     * @return Response
     */
    public function index(TipoAlumnoDataTable $tipoAlumnoDataTable)
    {
        return $tipoAlumnoDataTable->render('tipo_alumnos.index');
    }

    /**
     * Show the form for creating a new TipoAlumno.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_alumnos.create');
    }

    /**
     * Store a newly created TipoAlumno in storage.
     *
     * @param CreateTipoAlumnoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoAlumnoRequest $request)
    {
        $input = $request->all();

        $tipoAlumno = $this->tipoAlumnoRepository->create($input);

        Flash::success('Tipo Alumno saved successfully.');

        return redirect(route('tipoAlumnos.index'));
    }

    /**
     * Display the specified TipoAlumno.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoAlumno = $this->tipoAlumnoRepository->find($id);

        if (empty($tipoAlumno)) {
            Flash::error('Tipo Alumno not found');

            return redirect(route('tipoAlumnos.index'));
        }

        return view('tipo_alumnos.show')->with('tipoAlumno', $tipoAlumno);
    }

    /**
     * Show the form for editing the specified TipoAlumno.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoAlumno = $this->tipoAlumnoRepository->find($id);

        if (empty($tipoAlumno)) {
            Flash::error('Tipo Alumno not found');

            return redirect(route('tipoAlumnos.index'));
        }

        return view('tipo_alumnos.edit')->with('tipoAlumno', $tipoAlumno);
    }

    /**
     * Update the specified TipoAlumno in storage.
     *
     * @param  int              $id
     * @param UpdateTipoAlumnoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoAlumnoRequest $request)
    {
        $tipoAlumno = $this->tipoAlumnoRepository->find($id);

        if (empty($tipoAlumno)) {
            Flash::error('Tipo Alumno not found');

            return redirect(route('tipoAlumnos.index'));
        }

        $tipoAlumno = $this->tipoAlumnoRepository->update($request->all(), $id);

        Flash::success('Tipo Alumno updated successfully.');

        return redirect(route('tipoAlumnos.index'));
    }

    /**
     * Remove the specified TipoAlumno from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoAlumno = $this->tipoAlumnoRepository->find($id);

        if (empty($tipoAlumno)) {
            Flash::error('Tipo Alumno not found');

            return redirect(route('tipoAlumnos.index'));
        }

        $this->tipoAlumnoRepository->delete($id);

        Flash::success('Tipo Alumno deleted successfully.');

        return redirect(route('tipoAlumnos.index'));
    }
}

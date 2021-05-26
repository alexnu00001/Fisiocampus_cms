<?php

namespace App\Http\Controllers;

use App\DataTables\InscripcionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateInscripcionRequest;
use App\Http\Requests\UpdateInscripcionRequest;
use App\Repositories\InscripcionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class InscripcionController extends AppBaseController
{
    /** @var  InscripcionRepository */
    private $inscripcionRepository;

    public function __construct(InscripcionRepository $inscripcionRepo)
    {
        $this->inscripcionRepository = $inscripcionRepo;
    }

    /**
     * Display a listing of the Inscripcion.
     *
     * @param InscripcionDataTable $inscripcionDataTable
     * @return Response
     */
    public function index(InscripcionDataTable $inscripcionDataTable)
    {
        return $inscripcionDataTable->render('inscripcions.index');
    }

    /**
     * Show the form for creating a new Inscripcion.
     *
     * @return Response
     */
    public function create()
    {
        return view('inscripcions.create');
    }

    /**
     * Store a newly created Inscripcion in storage.
     *
     * @param CreateInscripcionRequest $request
     *
     * @return Response
     */
    public function store(CreateInscripcionRequest $request)
    {
        $input = $request->all();

        $inscripcion = $this->inscripcionRepository->create($input);

        Flash::success('Inscripcion saved successfully.');

        return redirect(route('inscripcions.index'));
    }

    /**
     * Display the specified Inscripcion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inscripcion = $this->inscripcionRepository->find($id);

        if (empty($inscripcion)) {
            Flash::error('Inscripcion not found');

            return redirect(route('inscripcions.index'));
        }

        return view('inscripcions.show')->with('inscripcion', $inscripcion);
    }

    /**
     * Show the form for editing the specified Inscripcion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inscripcion = $this->inscripcionRepository->find($id);

        if (empty($inscripcion)) {
            Flash::error('Inscripcion not found');

            return redirect(route('inscripcions.index'));
        }

        return view('inscripcions.edit')->with('inscripcion', $inscripcion);
    }

    /**
     * Update the specified Inscripcion in storage.
     *
     * @param  int              $id
     * @param UpdateInscripcionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInscripcionRequest $request)
    {
        $inscripcion = $this->inscripcionRepository->find($id);

        if (empty($inscripcion)) {
            Flash::error('Inscripcion not found');

            return redirect(route('inscripcions.index'));
        }

        $inscripcion = $this->inscripcionRepository->update($request->all(), $id);

        Flash::success('Inscripcion updated successfully.');

        return redirect(route('inscripcions.index'));
    }

    /**
     * Remove the specified Inscripcion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inscripcion = $this->inscripcionRepository->find($id);

        if (empty($inscripcion)) {
            Flash::error('Inscripcion not found');

            return redirect(route('inscripcions.index'));
        }

        $this->inscripcionRepository->delete($id);

        Flash::success('Inscripcion deleted successfully.');

        return redirect(route('inscripcions.index'));
    }
}

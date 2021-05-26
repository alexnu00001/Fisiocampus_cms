<?php

namespace App\Http\Controllers;

use App\DataTables\OfertaInscripcionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateOfertaInscripcionRequest;
use App\Http\Requests\UpdateOfertaInscripcionRequest;
use App\Repositories\OfertaInscripcionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class OfertaInscripcionController extends AppBaseController
{
    /** @var  OfertaInscripcionRepository */
    private $ofertaInscripcionRepository;

    public function __construct(OfertaInscripcionRepository $ofertaInscripcionRepo)
    {
        $this->ofertaInscripcionRepository = $ofertaInscripcionRepo;
    }

    /**
     * Display a listing of the OfertaInscripcion.
     *
     * @param OfertaInscripcionDataTable $ofertaInscripcionDataTable
     * @return Response
     */
    public function index(OfertaInscripcionDataTable $ofertaInscripcionDataTable)
    {
        return $ofertaInscripcionDataTable->render('oferta_inscripcions.index');
    }

    /**
     * Show the form for creating a new OfertaInscripcion.
     *
     * @return Response
     */
    public function create()
    {
        return view('oferta_inscripcions.create');
    }

    /**
     * Store a newly created OfertaInscripcion in storage.
     *
     * @param CreateOfertaInscripcionRequest $request
     *
     * @return Response
     */
    public function store(CreateOfertaInscripcionRequest $request)
    {
        $input = $request->all();

        $ofertaInscripcion = $this->ofertaInscripcionRepository->create($input);

        Flash::success('Oferta Inscripcion saved successfully.');

        return redirect(route('ofertaInscripcions.index'));
    }

    /**
     * Display the specified OfertaInscripcion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ofertaInscripcion = $this->ofertaInscripcionRepository->find($id);

        if (empty($ofertaInscripcion)) {
            Flash::error('Oferta Inscripcion not found');

            return redirect(route('ofertaInscripcions.index'));
        }

        return view('oferta_inscripcions.show')->with('ofertaInscripcion', $ofertaInscripcion);
    }

    /**
     * Show the form for editing the specified OfertaInscripcion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ofertaInscripcion = $this->ofertaInscripcionRepository->find($id);

        if (empty($ofertaInscripcion)) {
            Flash::error('Oferta Inscripcion not found');

            return redirect(route('ofertaInscripcions.index'));
        }

        return view('oferta_inscripcions.edit')->with('ofertaInscripcion', $ofertaInscripcion);
    }

    /**
     * Update the specified OfertaInscripcion in storage.
     *
     * @param  int              $id
     * @param UpdateOfertaInscripcionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOfertaInscripcionRequest $request)
    {
        $ofertaInscripcion = $this->ofertaInscripcionRepository->find($id);

        if (empty($ofertaInscripcion)) {
            Flash::error('Oferta Inscripcion not found');

            return redirect(route('ofertaInscripcions.index'));
        }

        $ofertaInscripcion = $this->ofertaInscripcionRepository->update($request->all(), $id);

        Flash::success('Oferta Inscripcion updated successfully.');

        return redirect(route('ofertaInscripcions.index'));
    }

    /**
     * Remove the specified OfertaInscripcion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ofertaInscripcion = $this->ofertaInscripcionRepository->find($id);

        if (empty($ofertaInscripcion)) {
            Flash::error('Oferta Inscripcion not found');

            return redirect(route('ofertaInscripcions.index'));
        }

        $this->ofertaInscripcionRepository->delete($id);

        Flash::success('Oferta Inscripcion deleted successfully.');

        return redirect(route('ofertaInscripcions.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\DataTables\EstudianteOfertaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEstudianteOfertaRequest;
use App\Http\Requests\UpdateEstudianteOfertaRequest;
use App\Repositories\EstudianteOfertaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EstudianteOfertaController extends AppBaseController
{
    /** @var  EstudianteOfertaRepository */
    private $estudianteOfertaRepository;

    public function __construct(EstudianteOfertaRepository $estudianteOfertaRepo)
    {
        $this->estudianteOfertaRepository = $estudianteOfertaRepo;
    }

    /**
     * Display a listing of the EstudianteOferta.
     *
     * @param EstudianteOfertaDataTable $estudianteOfertaDataTable
     * @return Response
     */
    public function index(EstudianteOfertaDataTable $estudianteOfertaDataTable)
    {
        return $estudianteOfertaDataTable->render('estudiante_ofertas.index');
    }

    /**
     * Show the form for creating a new EstudianteOferta.
     *
     * @return Response
     */
    public function create()
    {
        return view('estudiante_ofertas.create');
    }

    /**
     * Store a newly created EstudianteOferta in storage.
     *
     * @param CreateEstudianteOfertaRequest $request
     *
     * @return Response
     */
    public function store(CreateEstudianteOfertaRequest $request)
    {
        $input = $request->all();

        $estudianteOferta = $this->estudianteOfertaRepository->create($input);

        Flash::success('Estudiante Oferta saved successfully.');

        return redirect(route('estudianteOfertas.index'));
    }

    /**
     * Display the specified EstudianteOferta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estudianteOferta = $this->estudianteOfertaRepository->find($id);

        if (empty($estudianteOferta)) {
            Flash::error('Estudiante Oferta not found');

            return redirect(route('estudianteOfertas.index'));
        }

        return view('estudiante_ofertas.show')->with('estudianteOferta', $estudianteOferta);
    }

    /**
     * Show the form for editing the specified EstudianteOferta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estudianteOferta = $this->estudianteOfertaRepository->find($id);

        if (empty($estudianteOferta)) {
            Flash::error('Estudiante Oferta not found');

            return redirect(route('estudianteOfertas.index'));
        }

        return view('estudiante_ofertas.edit')->with('estudianteOferta', $estudianteOferta);
    }

    /**
     * Update the specified EstudianteOferta in storage.
     *
     * @param  int              $id
     * @param UpdateEstudianteOfertaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstudianteOfertaRequest $request)
    {
        $estudianteOferta = $this->estudianteOfertaRepository->find($id);

        if (empty($estudianteOferta)) {
            Flash::error('Estudiante Oferta not found');

            return redirect(route('estudianteOfertas.index'));
        }

        $estudianteOferta = $this->estudianteOfertaRepository->update($request->all(), $id);

        Flash::success('Estudiante Oferta updated successfully.');

        return redirect(route('estudianteOfertas.index'));
    }

    /**
     * Remove the specified EstudianteOferta from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estudianteOferta = $this->estudianteOfertaRepository->find($id);

        if (empty($estudianteOferta)) {
            Flash::error('Estudiante Oferta not found');

            return redirect(route('estudianteOfertas.index'));
        }

        $this->estudianteOfertaRepository->delete($id);

        Flash::success('Estudiante Oferta deleted successfully.');

        return redirect(route('estudianteOfertas.index'));
    }
}

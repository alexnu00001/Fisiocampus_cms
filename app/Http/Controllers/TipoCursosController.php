<?php

namespace App\Http\Controllers;

use App\DataTables\TipoCursosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTipoCursosRequest;
use App\Http\Requests\UpdateTipoCursosRequest;
use App\Repositories\TipoCursosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TipoCursosController extends AppBaseController
{
    /** @var  TipoCursosRepository */
    private $tipoCursosRepository;

    public function __construct(TipoCursosRepository $tipoCursosRepo)
    {
        $this->tipoCursosRepository = $tipoCursosRepo;
    }

    /**
     * Display a listing of the TipoCursos.
     *
     * @param TipoCursosDataTable $tipoCursosDataTable
     * @return Response
     */
    public function index(TipoCursosDataTable $tipoCursosDataTable)
    {
        return $tipoCursosDataTable->render('tipo_cursos.index');
    }

    /**
     * Show the form for creating a new TipoCursos.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_cursos.create');
    }

    /**
     * Store a newly created TipoCursos in storage.
     *
     * @param CreateTipoCursosRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoCursosRequest $request)
    {
        $input = $request->all();

        $tipoCursos = $this->tipoCursosRepository->create($input);

        Flash::success('Tipo Cursos saved successfully.');

        return redirect(route('tipoCursos.index'));
    }

    /**
     * Display the specified TipoCursos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoCursos = $this->tipoCursosRepository->find($id);

        if (empty($tipoCursos)) {
            Flash::error('Tipo Cursos not found');

            return redirect(route('tipoCursos.index'));
        }

        return view('tipo_cursos.show')->with('tipoCursos', $tipoCursos);
    }

    /**
     * Show the form for editing the specified TipoCursos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoCursos = $this->tipoCursosRepository->find($id);

        if (empty($tipoCursos)) {
            Flash::error('Tipo Cursos not found');

            return redirect(route('tipoCursos.index'));
        }

        return view('tipo_cursos.edit')->with('tipoCursos', $tipoCursos);
    }

    /**
     * Update the specified TipoCursos in storage.
     *
     * @param  int              $id
     * @param UpdateTipoCursosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoCursosRequest $request)
    {
        $tipoCursos = $this->tipoCursosRepository->find($id);

        if (empty($tipoCursos)) {
            Flash::error('Tipo Cursos not found');

            return redirect(route('tipoCursos.index'));
        }

        $tipoCursos = $this->tipoCursosRepository->update($request->all(), $id);

        Flash::success('Tipo Cursos updated successfully.');

        return redirect(route('tipoCursos.index'));
    }

    /**
     * Remove the specified TipoCursos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoCursos = $this->tipoCursosRepository->find($id);

        if (empty($tipoCursos)) {
            Flash::error('Tipo Cursos not found');

            return redirect(route('tipoCursos.index'));
        }

        $this->tipoCursosRepository->delete($id);

        Flash::success('Tipo Cursos deleted successfully.');

        return redirect(route('tipoCursos.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\DataTables\tipo_calificacionDataTable;
use App\Http\Requests;
use App\Http\Requests\Createtipo_calificacionRequest;
use App\Http\Requests\Updatetipo_calificacionRequest;
use App\Repositories\tipo_calificacionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class tipo_calificacionController extends AppBaseController
{
    /** @var  tipo_calificacionRepository */
    private $tipoCalificacionRepository;

    public function __construct(tipo_calificacionRepository $tipoCalificacionRepo)
    {
        $this->tipoCalificacionRepository = $tipoCalificacionRepo;
    }

    /**
     * Display a listing of the tipo_calificacion.
     *
     * @param tipo_calificacionDataTable $tipoCalificacionDataTable
     * @return Response
     */
    public function index(tipo_calificacionDataTable $tipoCalificacionDataTable)
    {
        return $tipoCalificacionDataTable->render('tipo_calificacions.index');
    }

    /**
     * Show the form for creating a new tipo_calificacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_calificacions.create');
    }

    /**
     * Store a newly created tipo_calificacion in storage.
     *
     * @param Createtipo_calificacionRequest $request
     *
     * @return Response
     */
    public function store(Createtipo_calificacionRequest $request)
    {
        $input = $request->all();

        $tipoCalificacion = $this->tipoCalificacionRepository->create($input);

        Flash::success('Tipo Calificacion saved successfully.');

        return redirect(route('tipoCalificacions.index'));
    }

    /**
     * Display the specified tipo_calificacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoCalificacion = $this->tipoCalificacionRepository->find($id);

        if (empty($tipoCalificacion)) {
            Flash::error('Tipo Calificacion not found');

            return redirect(route('tipoCalificacions.index'));
        }

        return view('tipo_calificacions.show')->with('tipoCalificacion', $tipoCalificacion);
    }

    /**
     * Show the form for editing the specified tipo_calificacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoCalificacion = $this->tipoCalificacionRepository->find($id);

        if (empty($tipoCalificacion)) {
            Flash::error('Tipo Calificacion not found');

            return redirect(route('tipoCalificacions.index'));
        }

        return view('tipo_calificacions.edit')->with('tipoCalificacion', $tipoCalificacion);
    }

    /**
     * Update the specified tipo_calificacion in storage.
     *
     * @param  int              $id
     * @param Updatetipo_calificacionRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetipo_calificacionRequest $request)
    {
        $tipoCalificacion = $this->tipoCalificacionRepository->find($id);

        if (empty($tipoCalificacion)) {
            Flash::error('Tipo Calificacion not found');

            return redirect(route('tipoCalificacions.index'));
        }

        $tipoCalificacion = $this->tipoCalificacionRepository->update($request->all(), $id);

        Flash::success('Tipo Calificacion updated successfully.');

        return redirect(route('tipoCalificacions.index'));
    }

    /**
     * Remove the specified tipo_calificacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoCalificacion = $this->tipoCalificacionRepository->find($id);

        if (empty($tipoCalificacion)) {
            Flash::error('Tipo Calificacion not found');

            return redirect(route('tipoCalificacions.index'));
        }

        $this->tipoCalificacionRepository->delete($id);

        Flash::success('Tipo Calificacion deleted successfully.');

        return redirect(route('tipoCalificacions.index'));
    }
}

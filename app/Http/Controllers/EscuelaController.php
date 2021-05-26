<?php

namespace App\Http\Controllers;

use App\DataTables\EscuelaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEscuelaRequest;
use App\Http\Requests\UpdateEscuelaRequest;
use App\Repositories\EscuelaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EscuelaController extends AppBaseController
{
    /** @var  EscuelaRepository */
    private $escuelaRepository;

    public function __construct(EscuelaRepository $escuelaRepo)
    {
        $this->escuelaRepository = $escuelaRepo;
    }

    /**
     * Display a listing of the Escuela.
     *
     * @param EscuelaDataTable $escuelaDataTable
     * @return Response
     */
    public function index(EscuelaDataTable $escuelaDataTable)
    {
        return $escuelaDataTable->render('escuelas.index');
    }

    /**
     * Show the form for creating a new Escuela.
     *
     * @return Response
     */
    public function create()
    {
        return view('escuelas.create');
    }

    /**
     * Store a newly created Escuela in storage.
     *
     * @param CreateEscuelaRequest $request
     *
     * @return Response
     */
    public function store(CreateEscuelaRequest $request)
    {
        $input = $request->all();

        $escuela = $this->escuelaRepository->create($input);

        Flash::success('Escuela saved successfully.');

        return redirect(route('escuelas.index'));
    }

    /**
     * Display the specified Escuela.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $escuela = $this->escuelaRepository->find($id);

        if (empty($escuela)) {
            Flash::error('Escuela not found');

            return redirect(route('escuelas.index'));
        }

        return view('escuelas.show')->with('escuela', $escuela);
    }

    /**
     * Show the form for editing the specified Escuela.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $escuela = $this->escuelaRepository->find($id);

        if (empty($escuela)) {
            Flash::error('Escuela not found');

            return redirect(route('escuelas.index'));
        }

        return view('escuelas.edit')->with('escuela', $escuela);
    }

    /**
     * Update the specified Escuela in storage.
     *
     * @param  int              $id
     * @param UpdateEscuelaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEscuelaRequest $request)
    {
        $escuela = $this->escuelaRepository->find($id);

        if (empty($escuela)) {
            Flash::error('Escuela not found');

            return redirect(route('escuelas.index'));
        }

        $escuela = $this->escuelaRepository->update($request->all(), $id);

        Flash::success('Escuela updated successfully.');

        return redirect(route('escuelas.index'));
    }

    /**
     * Remove the specified Escuela from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $escuela = $this->escuelaRepository->find($id);

        if (empty($escuela)) {
            Flash::error('Escuela not found');

            return redirect(route('escuelas.index'));
        }

        $this->escuelaRepository->delete($id);

        Flash::success('Escuela deleted successfully.');

        return redirect(route('escuelas.index'));
    }
}

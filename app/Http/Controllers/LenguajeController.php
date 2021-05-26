<?php

namespace App\Http\Controllers;

use App\DataTables\LenguajeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateLenguajeRequest;
use App\Http\Requests\UpdateLenguajeRequest;
use App\Repositories\LenguajeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class LenguajeController extends AppBaseController
{
    /** @var  LenguajeRepository */
    private $lenguajeRepository;

    public function __construct(LenguajeRepository $lenguajeRepo)
    {
        $this->lenguajeRepository = $lenguajeRepo;
    }

    /**
     * Display a listing of the Lenguaje.
     *
     * @param LenguajeDataTable $lenguajeDataTable
     * @return Response
     */
    public function index(LenguajeDataTable $lenguajeDataTable)
    {
        return $lenguajeDataTable->render('lenguajes.index');
    }

    /**
     * Show the form for creating a new Lenguaje.
     *
     * @return Response
     */
    public function create()
    {
        return view('lenguajes.create');
    }

    /**
     * Store a newly created Lenguaje in storage.
     *
     * @param CreateLenguajeRequest $request
     *
     * @return Response
     */
    public function store(CreateLenguajeRequest $request)
    {
        $input = $request->all();

        $lenguaje = $this->lenguajeRepository->create($input);

        Flash::success('Lenguaje saved successfully.');

        return redirect(route('lenguajes.index'));
    }

    /**
     * Display the specified Lenguaje.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lenguaje = $this->lenguajeRepository->find($id);

        if (empty($lenguaje)) {
            Flash::error('Lenguaje not found');

            return redirect(route('lenguajes.index'));
        }

        return view('lenguajes.show')->with('lenguaje', $lenguaje);
    }

    /**
     * Show the form for editing the specified Lenguaje.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lenguaje = $this->lenguajeRepository->find($id);

        if (empty($lenguaje)) {
            Flash::error('Lenguaje not found');

            return redirect(route('lenguajes.index'));
        }

        return view('lenguajes.edit')->with('lenguaje', $lenguaje);
    }

    /**
     * Update the specified Lenguaje in storage.
     *
     * @param  int              $id
     * @param UpdateLenguajeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLenguajeRequest $request)
    {
        $lenguaje = $this->lenguajeRepository->find($id);

        if (empty($lenguaje)) {
            Flash::error('Lenguaje not found');

            return redirect(route('lenguajes.index'));
        }

        $lenguaje = $this->lenguajeRepository->update($request->all(), $id);

        Flash::success('Lenguaje updated successfully.');

        return redirect(route('lenguajes.index'));
    }

    /**
     * Remove the specified Lenguaje from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lenguaje = $this->lenguajeRepository->find($id);

        if (empty($lenguaje)) {
            Flash::error('Lenguaje not found');

            return redirect(route('lenguajes.index'));
        }

        $this->lenguajeRepository->delete($id);

        Flash::success('Lenguaje deleted successfully.');

        return redirect(route('lenguajes.index'));
    }
}

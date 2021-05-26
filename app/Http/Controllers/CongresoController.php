<?php

namespace App\Http\Controllers;

use App\DataTables\CongresoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCongresoRequest;
use App\Http\Requests\UpdateCongresoRequest;
use App\Repositories\CongresoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CongresoController extends AppBaseController
{
    /** @var  CongresoRepository */
    private $congresoRepository;

    public function __construct(CongresoRepository $congresoRepo)
    {
        $this->congresoRepository = $congresoRepo;
    }

    /**
     * Display a listing of the Congreso.
     *
     * @param CongresoDataTable $congresoDataTable
     * @return Response
     */
    public function index(CongresoDataTable $congresoDataTable)
    {
        return $congresoDataTable->render('congresos.index');
    }

    /**
     * Show the form for creating a new Congreso.
     *
     * @return Response
     */
    public function create()
    {
        return view('congresos.create');
    }

    /**
     * Store a newly created Congreso in storage.
     *
     * @param CreateCongresoRequest $request
     *
     * @return Response
     */
    public function store(CreateCongresoRequest $request)
    {
        $input = $request->all();

        $congreso = $this->congresoRepository->create($input);

        Flash::success('Congreso saved successfully.');

        return redirect(route('congresos.index'));
    }

    /**
     * Display the specified Congreso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $congreso = $this->congresoRepository->find($id);

        if (empty($congreso)) {
            Flash::error('Congreso not found');

            return redirect(route('congresos.index'));
        }

        return view('congresos.show')->with('congreso', $congreso);
    }

    /**
     * Show the form for editing the specified Congreso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $congreso = $this->congresoRepository->find($id);

        if (empty($congreso)) {
            Flash::error('Congreso not found');

            return redirect(route('congresos.index'));
        }

        return view('congresos.edit')->with('congreso', $congreso);
    }

    /**
     * Update the specified Congreso in storage.
     *
     * @param  int              $id
     * @param UpdateCongresoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCongresoRequest $request)
    {
        $congreso = $this->congresoRepository->find($id);

        if (empty($congreso)) {
            Flash::error('Congreso not found');

            return redirect(route('congresos.index'));
        }

        $congreso = $this->congresoRepository->update($request->all(), $id);

        Flash::success('Congreso updated successfully.');

        return redirect(route('congresos.index'));
    }

    /**
     * Remove the specified Congreso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $congreso = $this->congresoRepository->find($id);

        if (empty($congreso)) {
            Flash::error('Congreso not found');

            return redirect(route('congresos.index'));
        }

        $this->congresoRepository->delete($id);

        Flash::success('Congreso deleted successfully.');

        return redirect(route('congresos.index'));
    }
}

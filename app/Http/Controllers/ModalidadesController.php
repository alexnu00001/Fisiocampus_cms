<?php

namespace App\Http\Controllers;

use App\DataTables\ModalidadesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateModalidadesRequest;
use App\Http\Requests\UpdateModalidadesRequest;
use App\Repositories\ModalidadesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ModalidadesController extends AppBaseController
{
    /** @var  ModalidadesRepository */
    private $modalidadesRepository;

    public function __construct(ModalidadesRepository $modalidadesRepo)
    {
        $this->modalidadesRepository = $modalidadesRepo;
    }

    /**
     * Display a listing of the Modalidades.
     *
     * @param ModalidadesDataTable $modalidadesDataTable
     * @return Response
     */
    public function index(ModalidadesDataTable $modalidadesDataTable)
    {
        return $modalidadesDataTable->render('modalidades.index');
    }

    /**
     * Show the form for creating a new Modalidades.
     *
     * @return Response
     */
    public function create()
    {
        return view('modalidades.create');
    }

    /**
     * Store a newly created Modalidades in storage.
     *
     * @param CreateModalidadesRequest $request
     *
     * @return Response
     */
    public function store(CreateModalidadesRequest $request)
    {
        $input = $request->all();

        $modalidades = $this->modalidadesRepository->create($input);

        Flash::success('Modalidades saved successfully.');

        return redirect(route('modalidades.index'));
    }

    /**
     * Display the specified Modalidades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $modalidades = $this->modalidadesRepository->find($id);

        if (empty($modalidades)) {
            Flash::error('Modalidades not found');

            return redirect(route('modalidades.index'));
        }

        return view('modalidades.show')->with('modalidades', $modalidades);
    }

    /**
     * Show the form for editing the specified Modalidades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $modalidades = $this->modalidadesRepository->find($id);

        if (empty($modalidades)) {
            Flash::error('Modalidades not found');

            return redirect(route('modalidades.index'));
        }

        return view('modalidades.edit')->with('modalidades', $modalidades);
    }

    /**
     * Update the specified Modalidades in storage.
     *
     * @param  int              $id
     * @param UpdateModalidadesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateModalidadesRequest $request)
    {
        $modalidades = $this->modalidadesRepository->find($id);

        if (empty($modalidades)) {
            Flash::error('Modalidades not found');

            return redirect(route('modalidades.index'));
        }

        $modalidades = $this->modalidadesRepository->update($request->all(), $id);

        Flash::success('Modalidades updated successfully.');

        return redirect(route('modalidades.index'));
    }

    /**
     * Remove the specified Modalidades from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $modalidades = $this->modalidadesRepository->find($id);

        if (empty($modalidades)) {
            Flash::error('Modalidades not found');

            return redirect(route('modalidades.index'));
        }

        $this->modalidadesRepository->delete($id);

        Flash::success('Modalidades deleted successfully.');

        return redirect(route('modalidades.index'));
    }
}

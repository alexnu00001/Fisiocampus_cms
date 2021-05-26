<?php

namespace App\Http\Controllers;

use App\DataTables\ControlSuscripcionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateControlSuscripcionRequest;
use App\Http\Requests\UpdateControlSuscripcionRequest;
use App\Repositories\ControlSuscripcionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ControlSuscripcionController extends AppBaseController
{
    /** @var  ControlSuscripcionRepository */
    private $controlSuscripcionRepository;

    public function __construct(ControlSuscripcionRepository $controlSuscripcionRepo)
    {
        $this->controlSuscripcionRepository = $controlSuscripcionRepo;
    }

    /**
     * Display a listing of the ControlSuscripcion.
     *
     * @param ControlSuscripcionDataTable $controlSuscripcionDataTable
     * @return Response
     */
    public function index(ControlSuscripcionDataTable $controlSuscripcionDataTable)
    {
        return $controlSuscripcionDataTable->render('control_suscripcions.index');
    }

    /**
     * Show the form for creating a new ControlSuscripcion.
     *
     * @return Response
     */
    public function create()
    {
        return view('control_suscripcions.create');
    }

    /**
     * Store a newly created ControlSuscripcion in storage.
     *
     * @param CreateControlSuscripcionRequest $request
     *
     * @return Response
     */
    public function store(CreateControlSuscripcionRequest $request)
    {
        $input = $request->all();

        $controlSuscripcion = $this->controlSuscripcionRepository->create($input);

        Flash::success('Control Suscripcion saved successfully.');

        return redirect(route('controlSuscripcions.index'));
    }

    /**
     * Display the specified ControlSuscripcion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $controlSuscripcion = $this->controlSuscripcionRepository->find($id);

        if (empty($controlSuscripcion)) {
            Flash::error('Control Suscripcion not found');

            return redirect(route('controlSuscripcions.index'));
        }

        return view('control_suscripcions.show')->with('controlSuscripcion', $controlSuscripcion);
    }

    /**
     * Show the form for editing the specified ControlSuscripcion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $controlSuscripcion = $this->controlSuscripcionRepository->find($id);

        if (empty($controlSuscripcion)) {
            Flash::error('Control Suscripcion not found');

            return redirect(route('controlSuscripcions.index'));
        }

        return view('control_suscripcions.edit')->with('controlSuscripcion', $controlSuscripcion);
    }

    /**
     * Update the specified ControlSuscripcion in storage.
     *
     * @param  int              $id
     * @param UpdateControlSuscripcionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateControlSuscripcionRequest $request)
    {
        $controlSuscripcion = $this->controlSuscripcionRepository->find($id);

        if (empty($controlSuscripcion)) {
            Flash::error('Control Suscripcion not found');

            return redirect(route('controlSuscripcions.index'));
        }

        $controlSuscripcion = $this->controlSuscripcionRepository->update($request->all(), $id);

        Flash::success('Control Suscripcion updated successfully.');

        return redirect(route('controlSuscripcions.index'));
    }

    /**
     * Remove the specified ControlSuscripcion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $controlSuscripcion = $this->controlSuscripcionRepository->find($id);

        if (empty($controlSuscripcion)) {
            Flash::error('Control Suscripcion not found');

            return redirect(route('controlSuscripcions.index'));
        }

        $this->controlSuscripcionRepository->delete($id);

        Flash::success('Control Suscripcion deleted successfully.');

        return redirect(route('controlSuscripcions.index'));
    }
}

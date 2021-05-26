<?php

namespace App\Http\Controllers;

use App\DataTables\PlanEstudioDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePlanEstudioRequest;
use App\Http\Requests\UpdatePlanEstudioRequest;
use App\Repositories\PlanEstudioRepository;
use App\Models\Escala;

use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PlanEstudioController extends AppBaseController
{
    /** @var  PlanEstudioRepository */
    private $planEstudioRepository;

    public function __construct(PlanEstudioRepository $planEstudioRepo)
    {
        $this->planEstudioRepository = $planEstudioRepo;
    }

    /**
     * Display a listing of the PlanEstudio.
     *
     * @param PlanEstudioDataTable $planEstudioDataTable
     * @return Response
     */
    public function index(PlanEstudioDataTable $planEstudioDataTable)
    {
        return $planEstudioDataTable->render('plan_estudios.index');
    }

    /**
     * Show the form for creating a new PlanEstudio.
     *
     * @return Response
     */
    public function create()
    {
        return view('plan_estudios.create');
    }

    /**
     * Store a newly created PlanEstudio in storage.
     *
     * @param CreatePlanEstudioRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanEstudioRequest $request)
    {
        $input = $request->all();

        $planEstudio = $this->planEstudioRepository->create($input);

        //Creacion y almacenamiento de objeto 'Escala'
        $escala = new Escala;
        $escala->plan_estudios_id = $planEstudio->id;
        $escala->escala = $request->escala;
        $escala->save();

        Flash::success('Plan Estudio saved successfully.');

        return redirect(route('planEstudios.index'));
    }

    /**
     * Display the specified PlanEstudio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planEstudio = $this->planEstudioRepository->find($id);

        if (empty($planEstudio)) {
            Flash::error('Plan Estudio not found');

            return redirect(route('planEstudios.index'));
        }

        return view('plan_estudios.show')->with('planEstudio', $planEstudio);
    }

    /**
     * Show the form for editing the specified PlanEstudio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planEstudio = $this->planEstudioRepository->find($id);

        if (empty($planEstudio)) {
            Flash::error('Plan Estudio not found');

            return redirect(route('planEstudios.index'));
        }

        $planEstudio->escala = $planEstudio->escala->escala;

        return view('plan_estudios.edit')->with('planEstudio', $planEstudio);
    }

    /**
     * Update the specified PlanEstudio in storage.
     *
     * @param  int              $id
     * @param UpdatePlanEstudioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanEstudioRequest $request)
    {
        $planEstudio = $this->planEstudioRepository->find($id);
        $escala = $planEstudio->escala;

        if (empty($planEstudio)) {
            Flash::error('Plan Estudio not found');

            return redirect(route('planEstudios.index'));
        }

        $planEstudio = $this->planEstudioRepository->update($request->all(), $id);

        $escala->escala = $request->escala;
        $escala->save();

        Flash::success('Plan Estudio updated successfully.');

        return redirect(route('planEstudios.index'));
    }

    /**
     * Remove the specified PlanEstudio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planEstudio = $this->planEstudioRepository->find($id);

        if (empty($planEstudio)) {
            Flash::error('Plan Estudio not found');

            return redirect(route('planEstudios.index'));
        }

        $this->planEstudioRepository->delete($id);

        Flash::success('Plan Estudio deleted successfully.');

        return redirect(route('planEstudios.index'));
    }
}

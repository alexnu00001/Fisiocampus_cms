<?php

namespace App\Http\Controllers;

use App\DataTables\MonedaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMonedaRequest;
use App\Http\Requests\UpdateMonedaRequest;
use App\Repositories\MonedaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MonedaController extends AppBaseController
{
    /** @var  MonedaRepository */
    private $monedaRepository;

    public function __construct(MonedaRepository $monedaRepo)
    {
        $this->monedaRepository = $monedaRepo;
    }

    /**
     * Display a listing of the Moneda.
     *
     * @param MonedaDataTable $monedaDataTable
     * @return Response
     */
    public function index(MonedaDataTable $monedaDataTable)
    {
        return $monedaDataTable->render('monedas.index');
    }

    /**
     * Show the form for creating a new Moneda.
     *
     * @return Response
     */
    public function create()
    {
        return view('monedas.create');
    }

    /**
     * Store a newly created Moneda in storage.
     *
     * @param CreateMonedaRequest $request
     *
     * @return Response
     */
    public function store(CreateMonedaRequest $request)
    {
        $input = $request->all();

        $moneda = $this->monedaRepository->create($input);

        Flash::success('Moneda saved successfully.');

        return redirect(route('monedas.index'));
    }

    /**
     * Display the specified Moneda.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $moneda = $this->monedaRepository->find($id);

        if (empty($moneda)) {
            Flash::error('Moneda not found');

            return redirect(route('monedas.index'));
        }

        return view('monedas.show')->with('moneda', $moneda);
    }

    /**
     * Show the form for editing the specified Moneda.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $moneda = $this->monedaRepository->find($id);

        if (empty($moneda)) {
            Flash::error('Moneda not found');

            return redirect(route('monedas.index'));
        }

        return view('monedas.edit')->with('moneda', $moneda);
    }

    /**
     * Update the specified Moneda in storage.
     *
     * @param  int              $id
     * @param UpdateMonedaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMonedaRequest $request)
    {
        $moneda = $this->monedaRepository->find($id);

        if (empty($moneda)) {
            Flash::error('Moneda not found');

            return redirect(route('monedas.index'));
        }

        $moneda = $this->monedaRepository->update($request->all(), $id);

        Flash::success('Moneda updated successfully.');

        return redirect(route('monedas.index'));
    }

    /**
     * Remove the specified Moneda from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $moneda = $this->monedaRepository->find($id);

        if (empty($moneda)) {
            Flash::error('Moneda not found');

            return redirect(route('monedas.index'));
        }

        $this->monedaRepository->delete($id);

        Flash::success('Moneda deleted successfully.');

        return redirect(route('monedas.index'));
    }
}

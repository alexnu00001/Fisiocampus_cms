<?php

namespace App\Http\Controllers;

use App\DataTables\OdaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateOdaRequest;
use App\Http\Requests\UpdateOdaRequest;
use App\Repositories\OdaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class OdaController extends AppBaseController
{
    /** @var  OdaRepository */
    private $odaRepository;

    public function __construct(OdaRepository $odaRepo)
    {
        $this->odaRepository = $odaRepo;
    }

    /**
     * Display a listing of the Oda.
     *
     * @param OdaDataTable $odaDataTable
     * @return Response
     */
    public function index(OdaDataTable $odaDataTable)
    {
        return $odaDataTable->render('odas.index');
    }

    /**
     * Show the form for creating a new Oda.
     *
     * @return Response
     */
    public function create()
    {
        return view('odas.create');
    }

    /**
     * Store a newly created Oda in storage.
     *
     * @param CreateOdaRequest $request
     *
     * @return Response
     */
    public function store(CreateOdaRequest $request)
    {
        $input = $request->all();

        $oda = $this->odaRepository->create($input);

            $docPrincipalOda = $request->file('doc_principal_oda');

        if($docPrincipalOda){
          $oda->addMediaFromRequest('doc_principal_oda')->toMediaCollection('documentos');
        }
        
        Flash::success('Oda saved successfully.');

        return redirect(route('odas.index'));
    }

    /**
     * Display the specified Oda.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $oda = $this->odaRepository->find($id);

        if (empty($oda)) {
            Flash::error('Oda not found');

            return redirect(route('odas.index'));
        }

        return view('odas.show')->with('oda', $oda);
    }

    /**
     * Show the form for editing the specified Oda.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $oda = $this->odaRepository->find($id);

        if (empty($oda)) {
            Flash::error('Oda not found');

            return redirect(route('odas.index'));
        }

        return view('odas.edit')->with('oda', $oda);
    }

    /**
     * Update the specified Oda in storage.
     *
     * @param  int              $id
     * @param UpdateOdaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOdaRequest $request)
    {
        $oda = $this->odaRepository->find($id);

        if (empty($oda)) {
            Flash::error('Oda not found');

            return redirect(route('odas.index'));
        }

        $oda = $this->odaRepository->update($request->all(), $id);

            $docPrincipalOda = $request->file('doc_principal_oda');

        if($docPrincipalOda){
          $oda->addMediaFromRequest('doc_principal_oda')->toMediaCollection('documentos');
        }

        Flash::success('Oda updated successfully.');

        return redirect(route('odas.index'));
    }

    /**
     * Remove the specified Oda from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $oda = $this->odaRepository->find($id);

        if (empty($oda)) {
            Flash::error('Oda not found');

            return redirect(route('odas.index'));
        }

        $this->odaRepository->delete($id);

        Flash::success('Oda deleted successfully.');

        return redirect(route('odas.index'));
    }

}

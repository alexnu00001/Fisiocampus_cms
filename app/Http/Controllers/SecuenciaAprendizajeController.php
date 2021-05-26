<?php

namespace App\Http\Controllers;

use App\DataTables\SecuenciaAprendizajeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSecuenciaAprendizajeRequest;
use App\Http\Requests\UpdateSecuenciaAprendizajeRequest;
use App\Repositories\SecuenciaAprendizajeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SecuenciaAprendizajeController extends AppBaseController
{
    /** @var  SecuenciaAprendizajeRepository */
    private $secuenciaAprendizajeRepository;

    public function __construct(SecuenciaAprendizajeRepository $secuenciaAprendizajeRepo)
    {
        $this->secuenciaAprendizajeRepository = $secuenciaAprendizajeRepo;
    }

    /**
     * Display a listing of the SecuenciaAprendizaje.
     *
     * @param SecuenciaAprendizajeDataTable $secuenciaAprendizajeDataTable
     * @return Response
     */
    public function index(SecuenciaAprendizajeDataTable $secuenciaAprendizajeDataTable)
    {
        return $secuenciaAprendizajeDataTable->render('secuencia_aprendizajes.index');
    }

    /**
     * Show the form for creating a new SecuenciaAprendizaje.
     *
     * @return Response
     */
    public function create()
    {
        return view('secuencia_aprendizajes.create');
    }

    /**
     * Store a newly created SecuenciaAprendizaje in storage.
     *
     * @param CreateSecuenciaAprendizajeRequest $request
     *
     * @return Response
     */
    public function store(CreateSecuenciaAprendizajeRequest $request)
    {
        $input = $request->all();

        $secuenciaAprendizaje = $this->secuenciaAprendizajeRepository->create($input);

            $imgBannerSecuenciaAprendisaje = $request->file('img_banner_secuenciaaprendisaje');
            $imgPrincipalSecuenciaAprendisaje = $request->file('img_principal_secuenciaaprendisaje');
            $imgSecundariaSecuenciaAprendisaje = $request->file('img_secundaria_secuenciaaprendisaje');
            $imgIconoSecuenciaAprendisaje = $request->file('img_icono_secuenciaaprendisaje');
             
        if($imgBannerSecuenciaAprendisaje){
          $secuenciaAprendizaje->addMediaFromRequest('img_banner_secuenciaaprendisaje')->toMediaCollection('secuenciasAprendisajes_banner');
        }
        if($imgPrincipalSecuenciaAprendisaje){
          $secuenciaAprendizaje->addMediaFromRequest('img_principal_secuenciaaprendisaje')->toMediaCollection('secuenciasAprendisajes_principal');
        }
        if($imgSecundariaSecuenciaAprendisaje){
          $secuenciaAprendizaje->addMediaFromRequest('img_secundaria_secuenciaaprendisaje')->toMediaCollection('secuenciasAprendisajes_secundaria');
        }
        if($imgIconoSecuenciaAprendisaje){
          $secuenciaAprendizaje->addMediaFromRequest('img_icono_secuenciaaprendisaje')->toMediaCollection('secuenciasAprendisajes_icono');
        }

        Flash::success('Secuencia Aprendizaje saved successfully.');

        return redirect(route('secuenciaAprendizajes.index'));
    }

    /**
     * Display the specified SecuenciaAprendizaje.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $secuenciaAprendizaje = $this->secuenciaAprendizajeRepository->find($id);

        if (empty($secuenciaAprendizaje)) {
            Flash::error('Secuencia Aprendizaje not found');

            return redirect(route('secuenciaAprendizajes.index'));
        }

        return view('secuencia_aprendizajes.show')->with('secuenciaAprendizaje', $secuenciaAprendizaje);
    }

    /**
     * Show the form for editing the specified SecuenciaAprendizaje.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $secuenciaAprendizaje = $this->secuenciaAprendizajeRepository->find($id);

        if (empty($secuenciaAprendizaje)) {
            Flash::error('Secuencia Aprendizaje not found');

            return redirect(route('secuenciaAprendizajes.index'));
        }

        return view('secuencia_aprendizajes.edit')->with('secuenciaAprendizaje', $secuenciaAprendizaje);
    }

    /**
     * Update the specified SecuenciaAprendizaje in storage.
     *
     * @param  int              $id
     * @param UpdateSecuenciaAprendizajeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSecuenciaAprendizajeRequest $request)
    {
        
        $secuenciaAprendizaje = $this->secuenciaAprendizajeRepository->find($id);

        if (empty($secuenciaAprendizaje)) {
            Flash::error('Secuencia Aprendizaje not found');

            return redirect(route('secuenciaAprendizajes.index'));
        }

        $secuenciaAprendizaje = $this->secuenciaAprendizajeRepository->update($request->all(), $id);

         $imgBannerSecuenciaAprendisaje = $request->file('img_banner_secuenciaaprendisaje');
            $imgPrincipalSecuenciaAprendisaje = $request->file('img_principal_secuenciaaprendisaje');
            $imgSecundariaSecuenciaAprendisaje = $request->file('img_secundaria_secuenciaaprendisaje');
            $imgIconoSecuenciaAprendisaje = $request->file('img_icono_secuenciaaprendisaje');
             
        if($imgBannerSecuenciaAprendisaje){
          $secuenciaAprendizaje->addMediaFromRequest('img_banner_secuenciaaprendisaje')->toMediaCollection('secuenciasAprendisajes_banner');
        }
        if($imgPrincipalSecuenciaAprendisaje){
          $secuenciaAprendizaje->addMediaFromRequest('img_principal_secuenciaaprendisaje')->toMediaCollection('secuenciasAprendisajes_principal');
        }
        if($imgSecundariaSecuenciaAprendisaje){
          $secuenciaAprendizaje->addMediaFromRequest('img_secundaria_secuenciaaprendisaje')->toMediaCollection('secuenciasAprendisajes_secundaria');
        }
        if($imgIconoSecuenciaAprendisaje){
          $secuenciaAprendizaje->addMediaFromRequest('img_icono_secuenciaaprendisaje')->toMediaCollection('secuenciasAprendisajes_icono');
        }


        Flash::success('Secuencia Aprendizaje updated successfully.');

        return redirect(route('secuenciaAprendizajes.index'));
    }

    /**
     * Remove the specified SecuenciaAprendizaje from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $secuenciaAprendizaje = $this->secuenciaAprendizajeRepository->find($id);

        if (empty($secuenciaAprendizaje)) {
            Flash::error('Secuencia Aprendizaje not found');

            return redirect(route('secuenciaAprendizajes.index'));
        }

        $this->secuenciaAprendizajeRepository->delete($id);

        Flash::success('Secuencia Aprendizaje deleted successfully.');

        return redirect(route('secuenciaAprendizajes.index'));
    }
}

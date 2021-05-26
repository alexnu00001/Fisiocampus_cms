<?php

namespace App\Http\Controllers;

use App\DataTables\OfertaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateOfertaRequest;
use App\Http\Requests\UpdateOfertaRequest;
use App\Models\Categoria;
use App\Models\Inscripcion;
use App\Models\Inscripcion_tipo;
use App\Models\Moneda;
use App\Models\Pais;
use App\Models\TipoOferta;
use App\Repositories\OfertaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class OfertaController extends AppBaseController
{
    /** @var  OfertaRepository */
    private $ofertaRepository;

    public function __construct(OfertaRepository $ofertaRepo)
    {
        $this->ofertaRepository = $ofertaRepo;
    }

    /**
     * Display a listing of the Oferta.
     *
     * @param OfertaDataTable $ofertaDataTable
     * @return Response
     */
    public function index(OfertaDataTable $ofertaDataTable)
    {
        return $ofertaDataTable->render('ofertas.index');
    }

    /**
     * Show the form for creating a new Oferta.
     *
     * @return Response
     */
    public function create()
    {
      $paises = Pais::pluck('nombre','id');
      $monedas = Moneda::pluck('nombre','id');
      $tipoOfertas = TipoOferta::pluck('nombre','id');
      $categorias = Categoria::pluck('nombre', 'id');
      $suscripcionesTipos = Inscripcion_tipo::pluck('nombre', 'id');

        return view('ofertas.create',compact('paises','monedas','tipoOfertas', 'categorias','suscripcionesTipos'));
    }

    /**
     * Store a newly created Oferta in storage.
     *
     * @param CreateOfertaRequest $request
     *
     * @return Response
     */
    public function store(CreateOfertaRequest $request)
    {
        $input = $request->all();
        $oferta = $this->ofertaRepository->create($input);
        $imgBannerOferta = $request->file('img_banner_oferta');
        $imgPrincipalOferta = $request->file('img_principal_oferta');
        $imgSecundariaOferta = $request->file('img_secundaria_oferta');
        $imgIconoOferta = $request->file('img_icono_oferta');

        foreach ($request->categorias as $categoria) {
          $oferta-> categorias()->attach($categoria);
        }

        if($imgBannerOferta){
          $oferta->addMediaFromRequest('img_banner_oferta')->toMediaCollection('ofertas_banner');
        }
        if($imgPrincipalOferta){
          $oferta->addMediaFromRequest('img_principal_oferta')->toMediaCollection('ofertas_principal');
        }
        if($imgSecundariaOferta){
          $oferta->addMediaFromRequest('img_secundaria_oferta')->toMediaCollection('ofertas_secundaria');
        }
        if($imgIconoOferta){
          $oferta->addMediaFromRequest('img_icono_oferta')->toMediaCollection('ofertas_icono');
        }


        /*Se comenta este fragmento de codigo que sirve para almacenar la imagen de manera directa.
         *
         * $extension = $file->getClientOriginalExtension();
        $nombre = $oferta->id.'.'.$extension;
        $ruta = storage_path('app/public/oferta/');
        if(!is_dir($ruta)){
            mkdir($ruta, 0755, true);
        }
        $file->move($ruta, $nombre); */

        Flash::success('Oferta creada.');

        return redirect(route('ofertas.index'));
    }

    /**
     * Display the specified Oferta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $oferta = $this->ofertaRepository->find($id);

        if (empty($oferta)) {
            Flash::error('Oferta no encontrada');

            return redirect(route('ofertas.index'));
        }

        return view('ofertas.show')->with('oferta', $oferta);
    }

    /**
     * Show the form for editing the specified Oferta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $oferta = $this->ofertaRepository->find($id);

        if (empty($oferta)) {
            Flash::error('Oferta no encontrada');

            return redirect(route('ofertas.index'));
        }
        $paises = Pais::pluck('nombre','id');
        $monedas = Moneda::pluck('nombre','id');
        $tipoOfertas = TipoOferta::pluck('nombre','id');
        $categorias = Categoria::pluck('nombre', 'id');
        $suscripcionesTipos = Inscripcion_tipo::pluck('nombre', 'id');

        return view('ofertas.edit',compact('paises','monedas','tipoOfertas','categorias','suscripcionesTipos'))->with('oferta', $oferta);
    }

    /**
     * Update the specified Oferta in storage.
     *
     * @param  int              $id
     * @param UpdateOfertaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOfertaRequest $request)
    {

        $oferta = $this->ofertaRepository->find($id);

        if (empty($oferta)) {
            Flash::error('Oferta no encontrada');

            return redirect(route('ofertas.index'));
        }

        $oferta = $this->ofertaRepository->update($request->all(), $id);

        $imgBannerOferta = $request->file('img_banner_oferta');
        $imgPrincipalOferta = $request->file('img_principal_oferta');
        $imgSecundariaOferta = $request->file('img_secundaria_oferta');
        $imgIconoOferta = $request->file('img_icono_oferta');

        if($imgBannerOferta){
          $oferta->addMediaFromRequest('img_banner_oferta')->toMediaCollection('ofertas_banner');
        }
        if($imgPrincipalOferta){
          $oferta->addMediaFromRequest('img_principal_oferta')->toMediaCollection('ofertas_principal');
        }
        if($imgSecundariaOferta){
          $oferta->addMediaFromRequest('img_secundaria_oferta')->toMediaCollection('ofertas_secundaria');
        }
        if($imgIconoOferta){
          $oferta->addMediaFromRequest('img_icono_oferta')->toMediaCollection('ofertas_icono');
        }
        $oferta-> categorias()->sync($request->categorias);
        $oferta-> suscripciones()->sync($request->suscripciones);

        Flash::success('Oferta Actualizada.');

        return redirect(route('ofertas.index'));
    }

    /**
     * Remove the specified Oferta from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $oferta = $this->ofertaRepository->find($id);

        if (empty($oferta)) {
            Flash::error('Oferta no encontrada');

            return redirect(route('ofertas.index'));
        }

        $this->ofertaRepository->delete($id);

        Flash::success('Oferta Eliminada');

        return redirect(route('ofertas.index'));
    }


}

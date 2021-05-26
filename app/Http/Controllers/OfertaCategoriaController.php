<?php

namespace App\Http\Controllers;

use App\DataTables\OfertaCategoriaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateOfertaCategoriaRequest;
use App\Http\Requests\UpdateOfertaCategoriaRequest;
use App\Repositories\OfertaCategoriaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class OfertaCategoriaController extends AppBaseController
{
    /** @var  OfertaCategoriaRepository */
    private $ofertaCategoriaRepository;

    public function __construct(OfertaCategoriaRepository $ofertaCategoriaRepo)
    {
        $this->ofertaCategoriaRepository = $ofertaCategoriaRepo;
    }

    /**
     * Display a listing of the OfertaCategoria.
     *
     * @param OfertaCategoriaDataTable $ofertaCategoriaDataTable
     * @return Response
     */
    public function index(OfertaCategoriaDataTable $ofertaCategoriaDataTable)
    {
        return $ofertaCategoriaDataTable->render('oferta_categorias.index');
    }

    /**
     * Show the form for creating a new OfertaCategoria.
     *
     * @return Response
     */
    public function create()
    {
        return view('oferta_categorias.create');
    }

    /**
     * Store a newly created OfertaCategoria in storage.
     *
     * @param CreateOfertaCategoriaRequest $request
     *
     * @return Response
     */
    public function store(CreateOfertaCategoriaRequest $request)
    {
        $input = $request->all();

        $ofertaCategoria = $this->ofertaCategoriaRepository->create($input);

        Flash::success('Oferta Categoria saved successfully.');

        return redirect(route('ofertaCategorias.index'));
    }

    /**
     * Display the specified OfertaCategoria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ofertaCategoria = $this->ofertaCategoriaRepository->find($id);

        if (empty($ofertaCategoria)) {
            Flash::error('Oferta Categoria not found');

            return redirect(route('ofertaCategorias.index'));
        }

        return view('oferta_categorias.show')->with('ofertaCategoria', $ofertaCategoria);
    }

    /**
     * Show the form for editing the specified OfertaCategoria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ofertaCategoria = $this->ofertaCategoriaRepository->find($id);

        if (empty($ofertaCategoria)) {
            Flash::error('Oferta Categoria not found');

            return redirect(route('ofertaCategorias.index'));
        }

        return view('oferta_categorias.edit')->with('ofertaCategoria', $ofertaCategoria);
    }

    /**
     * Update the specified OfertaCategoria in storage.
     *
     * @param  int              $id
     * @param UpdateOfertaCategoriaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOfertaCategoriaRequest $request)
    {
        $ofertaCategoria = $this->ofertaCategoriaRepository->find($id);

        if (empty($ofertaCategoria)) {
            Flash::error('Oferta Categoria not found');

            return redirect(route('ofertaCategorias.index'));
        }

        $ofertaCategoria = $this->ofertaCategoriaRepository->update($request->all(), $id);

        Flash::success('Oferta Categoria updated successfully.');

        return redirect(route('ofertaCategorias.index'));
    }

    /**
     * Remove the specified OfertaCategoria from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ofertaCategoria = $this->ofertaCategoriaRepository->find($id);

        if (empty($ofertaCategoria)) {
            Flash::error('Oferta Categoria not found');

            return redirect(route('ofertaCategorias.index'));
        }

        $this->ofertaCategoriaRepository->delete($id);

        Flash::success('Oferta Categoria deleted successfully.');

        return redirect(route('ofertaCategorias.index'));
    }
}

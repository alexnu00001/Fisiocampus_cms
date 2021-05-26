<?php

namespace App\Http\Controllers;

use App\DataTables\CategoriaCongresoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCategoriaCongresoRequest;
use App\Http\Requests\UpdateCategoriaCongresoRequest;
use App\Repositories\CategoriaCongresoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CategoriaCongresoController extends AppBaseController
{
    /** @var  CategoriaCongresoRepository */
    private $categoriaCongresoRepository;

    public function __construct(CategoriaCongresoRepository $categoriaCongresoRepo)
    {
        $this->categoriaCongresoRepository = $categoriaCongresoRepo;
    }

    /**
     * Display a listing of the CategoriaCongreso.
     *
     * @param CategoriaCongresoDataTable $categoriaCongresoDataTable
     * @return Response
     */
    public function index(CategoriaCongresoDataTable $categoriaCongresoDataTable)
    {
        return $categoriaCongresoDataTable->render('categoria_congresos.index');
    }

    /**
     * Show the form for creating a new CategoriaCongreso.
     *
     * @return Response
     */
    public function create()
    {
        return view('categoria_congresos.create');
    }

    /**
     * Store a newly created CategoriaCongreso in storage.
     *
     * @param CreateCategoriaCongresoRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoriaCongresoRequest $request)
    {
        $input = $request->all();

        $categoriaCongreso = $this->categoriaCongresoRepository->create($input);

        Flash::success('Categoria Congreso saved successfully.');

        return redirect(route('categoriaCongresos.index'));
    }

    /**
     * Display the specified CategoriaCongreso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoriaCongreso = $this->categoriaCongresoRepository->find($id);

        if (empty($categoriaCongreso)) {
            Flash::error('Categoria Congreso not found');

            return redirect(route('categoriaCongresos.index'));
        }

        return view('categoria_congresos.show')->with('categoriaCongreso', $categoriaCongreso);
    }

    /**
     * Show the form for editing the specified CategoriaCongreso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoriaCongreso = $this->categoriaCongresoRepository->find($id);

        if (empty($categoriaCongreso)) {
            Flash::error('Categoria Congreso not found');

            return redirect(route('categoriaCongresos.index'));
        }

        return view('categoria_congresos.edit')->with('categoriaCongreso', $categoriaCongreso);
    }

    /**
     * Update the specified CategoriaCongreso in storage.
     *
     * @param  int              $id
     * @param UpdateCategoriaCongresoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoriaCongresoRequest $request)
    {
        $categoriaCongreso = $this->categoriaCongresoRepository->find($id);

        if (empty($categoriaCongreso)) {
            Flash::error('Categoria Congreso not found');

            return redirect(route('categoriaCongresos.index'));
        }

        $categoriaCongreso = $this->categoriaCongresoRepository->update($request->all(), $id);

        Flash::success('Categoria Congreso updated successfully.');

        return redirect(route('categoriaCongresos.index'));
    }

    /**
     * Remove the specified CategoriaCongreso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoriaCongreso = $this->categoriaCongresoRepository->find($id);

        if (empty($categoriaCongreso)) {
            Flash::error('Categoria Congreso not found');

            return redirect(route('categoriaCongresos.index'));
        }

        $this->categoriaCongresoRepository->delete($id);

        Flash::success('Categoria Congreso deleted successfully.');

        return redirect(route('categoriaCongresos.index'));
    }
}

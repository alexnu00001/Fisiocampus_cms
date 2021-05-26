<?php

namespace App\Http\Controllers;

use App\DataTables\AutorDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAutorRequest;
use App\Http\Requests\UpdateAutorRequest;
use App\Repositories\AutorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class AutorController extends AppBaseController
{
    /** @var  AutorRepository */
    private $autorRepository;

    public function __construct(AutorRepository $autorRepo)
    {
        $this->autorRepository = $autorRepo;
    }

    /**
     * Display a listing of the Autor.
     *
     * @param AutorDataTable $autorDataTable
     * @return Response
     */
    public function index(AutorDataTable $autorDataTable)
    {
        return $autorDataTable->render('autors.index');
    }

    /**
     * Show the form for creating a new Autor.
     *
     * @return Response
     */
    public function create()
    {
        return view('autors.create');
    }

    /**
     * Store a newly created Autor in storage.
     *
     * @param CreateAutorRequest $request
     *
     * @return Response
     */
    public function store(CreateAutorRequest $request)
    {
       
        $input = $request->all();

        $autor = $this->autorRepository->create($input);
        $imgAutor = $request->file('img_autor');
    
        if($imgAutor){
          $autor->addMediaFromRequest('img_autor')->toMediaCollection('autores');
        }

        Flash::success('Autor saved successfully.');

        return redirect(route('autors.index'));
    }

    /**
     * Display the specified Autor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $autor = $this->autorRepository->find($id);

        if (empty($autor)) {
            Flash::error('Autor not found');

            return redirect(route('autors.index'));
        }

        return view('autors.show')->with('autor', $autor);
    }

    /**
     * Show the form for editing the specified Autor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $autor = $this->autorRepository->find($id);

        if (empty($autor)) {
            Flash::error('Autor not found');

            return redirect(route('autors.index'));
        }

        return view('autors.edit')->with('autor', $autor);
    }

    /**
     * Update the specified Autor in storage.
     *
     * @param  int              $id
     * @param UpdateAutorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAutorRequest $request)
    {
        //dd($request->all());
        $autor = $this->autorRepository->find($id);

        if (empty($autor)) {
            Flash::error('Autor not found');

            return redirect(route('autors.index'));
        }

        $autor = $this->autorRepository->update($request->all(), $id);

        $imgAutor = $request->file('img_autor');
    
        if($imgAutor){
          $autor->addMediaFromRequest('img_autor')->toMediaCollection('autores');
        }

        Flash::success('Autor updated successfully.');

        return redirect(route('autors.index'));
    }

    /**
     * Remove the specified Autor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $autor = $this->autorRepository->find($id);

        if (empty($autor)) {
            Flash::error('Autor not found');

            return redirect(route('autors.index'));
        }

        $this->autorRepository->delete($id);

        Flash::success('Autor deleted successfully.');

        return redirect(route('autors.index'));
    }
}

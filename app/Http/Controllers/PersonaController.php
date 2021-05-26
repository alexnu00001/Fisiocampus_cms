<?php

namespace App\Http\Controllers;

use App\DataTables\PersonaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePersonaRequest;
use App\Http\Requests\UpdatePersonaRequest;
use App\Repositories\PersonaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PersonaController extends AppBaseController
{
    /** @var  PersonaRepository */
    private $personaRepository;

    public function __construct(PersonaRepository $personaRepo)
    {
        $this->personaRepository = $personaRepo;
    }

    /**
     * Display a listing of the Persona.
     *
     * @param PersonaDataTable $personaDataTable
     * @return Response
     */
    public function index(PersonaDataTable $personaDataTable)
    {
        return $personaDataTable->render('personas.index');
    }

    /**
     * Show the form for creating a new Persona.
     *
     * @return Response
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created Persona in storage.
     *
     * @param CreatePersonaRequest $request
     *
     * @return Response
     */
    public function store(CreatePersonaRequest $request)
    {
        $input = $request->all();

        $persona = $this->personaRepository->create($input);

        Flash::success('Persona saved successfully.');

        return redirect(route('personas.index'));
    }

    /**
     * Display the specified Persona.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $persona = $this->personaRepository->find($id);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        return view('personas.perfil')->with('persona', $persona);
    }

    /**
     * Show the form for editing the specified Persona.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $persona = $this->personaRepository->find($id);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        return view('personas.edit')->with('persona', $persona);
    }

    /**
     * Update the specified Persona in storage.
     *
     * @param  int              $id
     * @param UpdatePersonaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersonaRequest $request)
    {
        $persona = $this->personaRepository->find($id);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        $persona = $this->personaRepository->update($request->all(), $id);

        Flash::success('Persona updated successfully.');

        return redirect(route('personas.index'));
    }

    /**
     * Remove the specified Persona from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $persona = $this->personaRepository->find($id);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        $this->personaRepository->delete($id);

        Flash::success('Persona deleted successfully.');

        return redirect(route('personas.index'));
    }

    public function showPerfil($id)
    {
        $persona = $this->personaRepository->find($id);

        if (empty($persona)) {
            Flash::error('Perfil no encontrado');

            return redirect(route('personas.index'));
        }

        return view('personas.perfil')->with('persona', $persona);
    }
}

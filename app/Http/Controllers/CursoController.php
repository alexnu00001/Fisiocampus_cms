<?php

namespace App\Http\Controllers;

use App\DataTables\CursoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCursoRequest;
use App\Http\Requests\UpdateCursoRequest;
use App\Repositories\CursoRepository;
use App\Models\Modalidades;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CursoController extends AppBaseController
{
    /** @var  CursoRepository */
    private $cursoRepository;

    public function __construct(CursoRepository $cursoRepo)
    {
        $this->cursoRepository = $cursoRepo;
    }

    /**
     * Display a listing of the Curso.
     *
     * @param CursoDataTable $cursoDataTable
     * @return Response
     */
    public function index(CursoDataTable $cursoDataTable)
    {
        return $cursoDataTable->render('cursos.index');
    }

    /**
     * Show the form for creating a new Curso.
     *
     * @return Response
     */
    public function create()
    {
        $modalidades = Modalidades::pluck('nombre','id');
        return view('cursos.create', compact('modalidades'));
    }

    /**
     * Store a newly created Curso in storage.
     *
     * @param CreateCursoRequest $request
     *
     * @return Response
     */
    public function store(CreateCursoRequest $request)
    {
        $input = $request->all();

        $curso = $this->cursoRepository->create($input);

            $imgBannerCurso = $request->file('img_banner_curso');
            $imgPrincipalCurso = $request->file('img_principal_curso');
            $imgSecundariaCurso = $request->file('img_secundaria_curso');
            $imgIconoCurso = $request->file('img_icono_curso');
             
        if($imgBannerCurso){
          $curso->addMediaFromRequest('img_banner_curso')->toMediaCollection('cursos_banner');
        }
        if($imgPrincipalCurso){
          $curso->addMediaFromRequest('img_principal_curso')->toMediaCollection('cursos_principal');
        }
        if($imgSecundariaCurso){
          $curso->addMediaFromRequest('img_secundaria_curso')->toMediaCollection('cursos_secundaria');
        }
        if($imgIconoCurso){
          $curso->addMediaFromRequest('img_icono_curso')->toMediaCollection('cursos_icono');
        }

        Flash::success('curso creado.');

        return redirect(route('cursos.index'));
    }

    /**
     * Display the specified Curso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        return view('cursos.show')->with('curso', $curso);
    }

    /**
     * Show the form for editing the specified Curso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        return view('cursos.edit')->with('curso', $curso);
    }

    /**
     * Update the specified Curso in storage.
     *
     * @param  int              $id
     * @param UpdateCursoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCursoRequest $request)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        $curso = $this->cursoRepository->update($request->all(), $id);

        Flash::success('Curso updated successfully.');

        return redirect(route('cursos.index'));
    }

    /**
     * Remove the specified Curso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        $this->cursoRepository->delete($id);

        Flash::success('Curso deleted successfully.');

        return redirect(route('cursos.index'));
    }
}

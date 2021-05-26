<?php

namespace App\Http\Controllers;

use App\DataTables\calificacion_oferta_cursoDataTable;
use App\Http\Requests;
use App\Http\Requests\Createcalificacion_oferta_cursoRequest;
use App\Http\Requests\Updatecalificacion_oferta_cursoRequest;
use App\Repositories\calificacion_oferta_cursoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Models\Curso;
use App\Models\Oda;
use App\Models\tipo_calificacion;
use App\Models\Oferta;
use Response;

class calificacion_oferta_cursoController extends AppBaseController
{
    /** @var  calificacion_oferta_cursoRepository */
    private $calificacionOfertaCursoRepository;

    public function __construct(calificacion_oferta_cursoRepository $calificacionOfertaCursoRepo)
    {
        $this->calificacionOfertaCursoRepository = $calificacionOfertaCursoRepo;
    }

    /**
     * Display a listing of the calificacion_oferta_curso.
     *
     * @param calificacion_oferta_cursoDataTable $calificacionOfertaCursoDataTable
     * @return Response
     */
    public function index(calificacion_oferta_cursoDataTable $calificacionOfertaCursoDataTable)
    {
        return $calificacionOfertaCursoDataTable->render('calificacion_oferta_cursos.index');
    }

    /**
     * Show the form for creating a new calificacion_oferta_curso.
     *
     * @return Response
     */
    public function create()
    {
        $odas = Oda::pluck('nombre', 'id');
        $cursos = Curso::pluck('titulo', 'id');
        $ofertas = Oferta::pluck('nombre', 'id');
        $tipos = tipo_calificacion::pluck('nombre', 'id');

        return view('calificacion_oferta_cursos.create')->with('odas', $odas)->with('cursos', $cursos)->with('ofertas', $ofertas)->with('tipos',$tipos);
    }

    /**
     * Store a newly created calificacion_oferta_curso in storage.
     *
     * @param Createcalificacion_oferta_cursoRequest $request
     *
     * @return Response
     */
    public function store(Createcalificacion_oferta_cursoRequest $request)
    {
        $input = $request->all();

        $calificacionOfertaCurso = $this->calificacionOfertaCursoRepository->create($input);

        Flash::success('Calificacion Oferta Curso saved successfully.');

        return redirect(route('calificacionOfertaCursos.index'));
    }

    /**
     * Display the specified calificacion_oferta_curso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $calificacionOfertaCurso = $this->calificacionOfertaCursoRepository->find($id);

        if (empty($calificacionOfertaCurso)) {
            Flash::error('Calificacion Oferta Curso not found');

            return redirect(route('calificacionOfertaCursos.index'));
        }

        return view('calificacion_oferta_cursos.show')->with('calificacionOfertaCurso', $calificacionOfertaCurso);
    }

    /**
     * Show the form for editing the specified calificacion_oferta_curso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $calificacionOfertaCurso = $this->calificacionOfertaCursoRepository->find($id);

        if (empty($calificacionOfertaCurso)) {
            Flash::error('Calificacion Oferta Curso not found');

            return redirect(route('calificacionOfertaCursos.index'));
        }

        $odas = Oda::pluck('nombre', 'id');
        $cursos = Curso::pluck('titulo', 'id');
        $ofertas = Oferta::pluck('nombre', 'id');
        $tipos = tipo_calificacion::pluck('nombre', 'id');

        return view('calificacion_oferta_cursos.edit')->with('calificacionOfertaCurso', $calificacionOfertaCurso)->with('odas', $odas)->with('cursos', $cursos)->with('ofertas', $ofertas)->with('tipos',$tipos);
    }

    /**
     * Update the specified calificacion_oferta_curso in storage.
     *
     * @param  int              $id
     * @param Updatecalificacion_oferta_cursoRequest $request
     *
     * @return Response
     */
    public function update($id, Updatecalificacion_oferta_cursoRequest $request)
    {
        $calificacionOfertaCurso = $this->calificacionOfertaCursoRepository->find($id);

        if (empty($calificacionOfertaCurso)) {
            Flash::error('Calificacion Oferta Curso not found');

            return redirect(route('calificacionOfertaCursos.index'));
        }

        $calificacionOfertaCurso = $this->calificacionOfertaCursoRepository->update($request->all(), $id);

        Flash::success('Calificacion Oferta Curso updated successfully.');

        return redirect(route('calificacionOfertaCursos.index'));
    }

    /**
     * Remove the specified calificacion_oferta_curso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $calificacionOfertaCurso = $this->calificacionOfertaCursoRepository->find($id);

        if (empty($calificacionOfertaCurso)) {
            Flash::error('Calificacion Oferta Curso not found');

            return redirect(route('calificacionOfertaCursos.index'));
        }

        $this->calificacionOfertaCursoRepository->delete($id);

        Flash::success('Calificacion Oferta Curso deleted successfully.');

        return redirect(route('calificacionOfertaCursos.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\DataTables\ArticuloDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateArticuloRequest;
use App\Http\Requests\UpdateArticuloRequest;
use App\Repositories\ArticuloRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

use Illuminate\Http\Request;

use App\Models\Autor;

class ArticuloController extends AppBaseController
{
    /** @var  ArticuloRepository */
    private $articuloRepository;

    public function __construct(ArticuloRepository $articuloRepo)
    {
        $this->articuloRepository = $articuloRepo;
    }

    /**
     * Display a listing of the Articulo.
     *
     * @param ArticuloDataTable $articuloDataTable
     * @return Response
     */
    public function index(ArticuloDataTable $articuloDataTable)
    {
        return $articuloDataTable->render('articulos.index');
    }

    /**
     * Show the form for creating a new Articulo.
     *
     * @return Response
     */
    public function create()
    {
        $autores = Autor::pluck('nombre', 'id');
        //dd($autores);
        return view('articulos.create', compact('autores'));
    }

    /**
     * Store a newly created Articulo in storage.
     *
     * @param CreateArticuloRequest $request
     *
     * @return Response
     */
    public function store(CreateArticuloRequest $request)
    {
        $input = $request->all();

        $articulo = $this->articuloRepository->create($input);

        Flash::success('Articulo saved successfully.');

        return redirect(route('articulos.index'));
    }

    /**
     * Display the specified Articulo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $articulo = $this->articuloRepository->find($id);

        if (empty($articulo)) {
            Flash::error('Articulo not found');

            return redirect(route('articulos.index'));
        }

        return view('articulos.show')->with('articulo', $articulo);
    }

    /**
     * Show the form for editing the specified Articulo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $articulo = $this->articuloRepository->find($id);

        if (empty($articulo)) {
            Flash::error('Articulo not found');

            return redirect(route('articulos.index'));
        }

        $autores = Autor::pluck('nombre', 'id');
        return view('articulos.edit', compact('autores'))->with('articulo', $articulo);
    }

    /**
     * Update the specified Articulo in storage.
     *
     * @param  int              $id
     * @param UpdateArticuloRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArticuloRequest $request)
    {
        $articulo = $this->articuloRepository->find($id);

        if (empty($articulo)) {
            Flash::error('Articulo not found');

            return redirect(route('articulos.index'));
        }

        $articulo = $this->articuloRepository->update($request->all(), $id);

        Flash::success('Articulo updated successfully.');

        return redirect(route('articulos.index'));
    }

    /**
     * Remove the specified Articulo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $articulo = $this->articuloRepository->find($id);

        if (empty($articulo)) {
            Flash::error('Articulo not found');

            return redirect(route('articulos.index'));
        }

        $this->articuloRepository->delete($id);

        Flash::success('Articulo deleted successfully.');

        return redirect(route('articulos.index'));
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload'))
        {
            $file = $request->file('upload');
            $nombre = $file->getClientOriginalName();
            $ruta = storage_path('app/public/blog-files/');
            if(!is_dir($ruta)){
                mkdir($ruta, 0755, true);
            }
            $file->move($ruta, $nombre);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset("storage/blog-files/$nombre");
            $message = "Imagen cargada correctamente";
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$message')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}

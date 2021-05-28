<?php

namespace App\Http\Controllers;

use App\Models\Logro;
use App\Models\User;
use App\DataTables\LogroDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateLogroRequest;
use App\Http\Requests\UpdateLogroRequest;
use App\Repositories\LogroRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogroController extends AppBaseController
{
    /** @var  LogroRepository */
    private $logroRepository;

    public function __construct(LogroRepository $logroRepo)
    {
        $this->logroRepository = $logroRepo;
    }

    /**
     * Display a listing of the Logro. 
     *
     * @param LogroDataTable $logroDataTable
     * @return Response
     */

    public function index(LogroDataTable $logroDataTable)
    {
        return $logroDataTable->render('logros.index');
    }

    /**
     * Show the form for creating a new Logro.
     *
     * @return Response
     */
    public function create()
    {
        return view('logros.create');
    }

    /**
     * Store a newly created Logro in storage.
     *
     * @param CreateLogroRequest $request
     *
     * @return Response
     */
    public function store(CreateLogroRequest $request)
    {
        $input = $request->all();
        try {
            $logro = $this->logroRepository->create($input);

                if($request->file('archivo'))
                {
                    $file = $request->file('archivo');
                    $nombre = $file->getClientOriginalName();
                    $ruta = storage_path('app/public/logros/');
                    if(!is_dir($ruta)){
                        mkdir($ruta, 0755, true);
                    }
                    $file->move($ruta, $nombre);

                    $logro->addMedia($ruta.$nombre)->toMediaCollection('logros');
                }
        } catch (Throwable $e) {
        report($e);
        return false;
        }
        Flash::success('Logro creado exitosamente');
        return redirect(route('logros.index'));
    }

    /**
     * Display the specified Logro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $logro = $this->logroRepository->find($id);

        if (empty($logro)) {
            Flash::error('Logro no encontrado');

            return redirect(route('logros.index'));
        }

        return view('logros.show')->with('logro', $logro);
    }

    /**
     * Show the form for editing the specified Logro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $logro = $this->logroRepository->find($id);

        if (empty($logro)) {
            Flash::error('Logro no encontrado');

            return redirect(route('logros.index'));
        }

        return view('logros.edit')->with('logro', $logro);
    }

    /**
     * Update the specified Logro in storage.
     *
     * @param  int              $id
     * @param UpdateLogroRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLogroRequest $request)
    {
        $logro = $this->logroRepository->find($id);

        if (empty($logro)) {
            Flash::error('Logro no encontrado');

            return redirect(route('logros.index'));
        }

        $logro = $this->logroRepository->update($request->all(), $id);

        Flash::success('Logro actualizado exitosamente');

        return redirect(route('logros.index'));
    }

    /**
     * Remove the specified Logro from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $logro = $this->logroRepository->find($id);

        if (empty($logro)) {
            Flash::error('Logro no encontrado');

            return redirect(route('logros.index'));
        }

        $this->logroRepository->delete($id);

        Flash::success('Logro borrado exitosamente');

        return redirect(route('logros.index'));
    }


}

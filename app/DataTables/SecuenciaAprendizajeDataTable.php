<?php

namespace App\DataTables;

use App\Models\SecuenciaAprendizaje;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class SecuenciaAprendizajeDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'secuencia_aprendizajes.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\SecuenciaAprendizaje $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(SecuenciaAprendizaje $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false,'title' => 'Acción'])
            ->parameters([
                'dom'       => '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    //['extend' => 'create', 'className' =>     'btn btn-outline-primary waves-effect',],
                    ['extend' => 'excel', 'className' =>      'btn btn-outline-primary waves-effect',],
                    ['extend' => 'csv', 'className' =>        'btn btn-outline-primary waves-effect',],
                    ['extend' => 'pdfHtml5', 'className' =>   'btn btn-outline-primary waves-effect',],
                    ['extend' => 'print', 'className' =>      'btn btn-outline-primary waves-effect',],
                    //['extend' => 'reset', 'className' =>      'btn btn-outline-primary waves-effect',]
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'nombre',
            'titulo',
            'is_seriado',
            'curso_id'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'secuencia_aprendizajes_datatable_' . time();
    }
}

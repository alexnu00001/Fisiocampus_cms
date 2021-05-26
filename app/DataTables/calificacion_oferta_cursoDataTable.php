<?php

namespace App\DataTables;

use App\Models\calificacion_oferta_curso;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;


class calificacion_oferta_cursoDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'calificacion_oferta_cursos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\calificacion_oferta_curso $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(calificacion_oferta_curso $model)
    {
        return $model->newQuery()->with(['oferta','curso','oda', 'tipo']);
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
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
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
            'oferta' => new \Yajra\DataTables\Html\Column(['title' => 'Ofertas', 'data' => 'oferta.nombre', 'name' => 'oferta.nombre']),
            'curso' => new \Yajra\DataTables\Html\Column(['title' => 'Curso', 'data' => 'curso.titulo', 'name' => 'curso.titulo']),
            'oda' => new \Yajra\DataTables\Html\Column(['title' => 'Oda', 'data' => 'oda.nombre', 'name' => 'oda.nombre']),
            'tipo'  => new \Yajra\DataTables\Html\Column(['title' => 'Tipo de calificación', 'data' => 'tipo.nombre', 'name' => 'tipo.nombre']),
            'porcentaje'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'calificacion_oferta_cursos_datatable_' . time();
    }
}

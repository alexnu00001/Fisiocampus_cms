<?php

namespace App\DataTables;

use App\Models\Role;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class RoleDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'roles.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Role $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Role $model)
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
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' =>     'btn bg-gradient-primary waves-effect waves-light btn-sm no-corner',],
                    ['extend' => 'excel', 'className' =>      'btn bg-gradient-success waves-effect waves-light btn-sm no-corner',],
                    ['extend' => 'csv', 'className' =>        'btn bg-gradient-success waves-effect waves-light btn-sm no-corner',],
                    ['extend' => 'pdfHtml5', 'className' =>   'btn bg-gradient-danger  waves-effect waves-light btn-sm no-corner',],
                    ['extend' => 'print', 'className' =>      'btn bg-gradient-danger  waves-effect waves-light btn-sm no-corner',],
                    ['extend' => 'reset', 'className' =>      'btn bg-gradient-warning waves-effect waves-light btn-sm no-corner',],
                    ['extend' => 'reload', 'className' =>     'btn bg-gradient-warning waves-effect waves-light btn-sm no-corner',],
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
            'name',
            'guard_name'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'roles_datatable_' . time();
    }
}

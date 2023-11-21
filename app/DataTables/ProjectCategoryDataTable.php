<?php

namespace App\DataTables;

use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProjectCategoryDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('action', function ($query) {
            $edit = '<a href="'.route('projectCategory.edit', $query->id).'" class="btn btn-soft-info rounded-pill waves-effect waves-light" title="Edit">
            <i class="fa fa-pencil" aria-hidden="true"></i></a>';
            $delete = '<a href="'.route('projectCategory.delete', $query->id).'" class="btn btn-soft-secondary rounded-pill waves-effect waves-light  mx-1" id="delete" title="Delete">
            <i class="fa fa-trash" aria-hidden="true"></i></a>';

            return $edit . $delete;


        })->addColumn('status', function($query){
            if($query->status === 1){
                return '<span class="btn btn-soft-success waves-effect waves-light" title="Active"><i class="fas fa-toggle-on fa-lg"></i></span>';
            }else {
                return '<span class="btn btn-soft-danger waves-effect waves-light" title="InActive"><i class="fas fa-toggle-off fa-lg "></i></span>';
            }

        })
        ->rawColumns(['action','status'])
        ->setRowId('id');

    }

    /**
     * Get the query source of dataTable.
     */
    public function query(ProjectCategory $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('projectcategory-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy('0','desc')
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('status'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(100)
                  ->addClass('text-center'),


        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'ProjectCategory_' . date('YmdHis');
    }
}

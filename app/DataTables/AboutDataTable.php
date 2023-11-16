<?php

namespace App\DataTables;

use App\Models\About;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class AboutDataTable extends DataTable
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
            $edit = '<a href="'.route('about.edit', $query->id).'" class="btn btn-soft-info rounded-pill waves-effect waves-light" title="Edit">
            <i class="fa fa-pencil" aria-hidden="true"></i></a>';
            $delete = '<a href="'.route('about.delete', $query->id).'" class="btn btn-soft-secondary rounded-pill waves-effect waves-light  mx-1" id="delete" title="Delete">
            <i class="fa fa-trash" aria-hidden="true"></i></a>';

            return $edit . $delete;

        })->addColumn('about_image', function($query){
            return '<img width="100px" src="'.asset($query->about_image).'">';

        })->addColumn('arrangement_image', function($query){
            return '<img width="100px" src="'.asset($query->arrangement_image).'">';
        })

        ->rawColumns(['about_image', 'action','arrangement_image'])
        ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(About $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('about-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
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
                Column::make('about_image'),
                Column::make('description'),
                Column::make('sub_description'),

                Column::make('mandate_sub'),
                Column::make('mandate_point'),
                Column::make('mandate_last'),

                Column::make('arrangement_description'),
                Column::make('arrangement_image'),

                Column::make('mission_description'),
                Column::make('chief_description'),
                Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(300)
                  ->addClass('text-center'),


        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'About_' . date('YmdHis');
    }
}

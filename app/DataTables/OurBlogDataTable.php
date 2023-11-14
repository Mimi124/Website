<?php

namespace App\DataTables;

use App\Models\OurBlog;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class OurBlogDataTable extends DataTable
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
            $edit = '<a href="'.route('ourBlog.edit', $query->id).'" class="btn btn-soft-info rounded-pill waves-effect waves-light" title="Edit">
            <i class="fa fa-pencil" aria-hidden="true"></i></a>';
            $delete = '<a href="'.route('ourBlog.delete', $query->id).'" class="btn btn-soft-secondary rounded-pill waves-effect waves-light  mx-1" id="delete" title="Delete">
            <i class="fa fa-trash" aria-hidden="true"></i></a>';


            return $edit . $delete;

        })->addColumn('image', function($query){
            return '<img width="100px" src="'.asset($query->image).'">';

        })
        ->rawColumns(['image', 'action'])
        ->setRowId('id');

    }

    /**
     * Get the query source of dataTable.
     */
    public function query(OurBlog $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('ourblog-table')
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
            Column::make('id')->width(10),
            Column::make('image')->width(50),
            Column::make('topic'),
            Column::make('date'),
            Column::make('button_link'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(150)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'OurBlog_' . date('YmdHis');
    }
}

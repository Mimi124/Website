<?php

namespace App\DataTables;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class BlogDataTable extends DataTable
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
            $edit = '<a href="'.route('blog.edit', $query->id).'" class="btn btn-soft-info rounded-pill waves-effect waves-light" title="Edit">
            <i class="fa fa-pencil" aria-hidden="true"></i></a>';
            $delete = '<a href="'.route('blog.delete', $query->id).'" class="btn btn-soft-secondary rounded-pill waves-effect waves-light  mx-1" id="delete" title="Delete">
            <i class="fa fa-trash" aria-hidden="true"></i></a>';

            return $edit . $delete;

        })->addColumn('image', function($query){
            return '<img width="80px" src="'.asset($query->image).'">';

        })
        ->addColumn('category', function($query){
            return $query->category->name;
        })
        ->addColumn('author', function($query){
            return $query->user->name;


        })->addColumn('status', function($query){
            if($query->status === 1){
                return '<span class="btn btn-success waves-effect waves-light">Active</span>';
            }else {
                return '<span class="btn btn-warning waves-effect waves-light">InActive</span>';
            }
        })
        ->rawColumns(['image','category', 'author', 'action', 'status'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Blog $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('blog-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(0,'desc')
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
            Column::make('image'),
            Column::make('title'),
            Column::make('category'),
            Column::make('author'),
            Column::make('description'),
            Column::make('status'),
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
        return 'Blog_' . date('YmdHis');
    }
}

@extends('layout.backend_layout.master')
@section('page_title', ' Blog  Categories- The Ministry of Sanitation and Water Resource')
@section('content')


<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <section class="section">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
        <ol class="breadcrumb m-0">
           <a href="{{route('blogCategory.create')}}"  class="btn btn-sm btn-secondary waves-effect waves-light float-end">
                <i class="mdi mdi-plus-circle">Create New</i> </a>
        </ol>
                    </div>
                    <h4 class="page-title">All Blog Categories</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Blog Categories Details</h5>
                <div class="card-body">
                  {{$dataTable->table() }}

            </div> <!-- end card-->
        </div>
    </section>



    </div> <!-- container -->

</div> <!-- content -->


@endsection


@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush

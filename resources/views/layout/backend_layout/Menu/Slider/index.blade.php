@extends('layout.backend_layout.master')
@section('page_title', 'Carousel - The Ministry of Sanitation and Water Resource')
@section('content')


<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
        <ol class="breadcrumb m-0">
           <a href="{{route('slider.create')}}"  class="btn btn-sm btn-secondary waves-effect waves-light float-end">
                <i class="mdi mdi-plus-circle">Create New</i> </a> 
        </ol>
                    </div>
                    <h4 class="page-title">All Sliders</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="col-md-12">
            <div class="card">
                {{-- <h5 class="card-header">Featured</h5> --}}
                <div class="card-body">
                  {{$dataTable->table() }}
                    
            </div> <!-- end card-->
        </div>




    </div> <!-- container -->

</div> <!-- content -->


@endsection


@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
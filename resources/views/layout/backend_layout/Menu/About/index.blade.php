@extends('layout.backend_layout.master')
@section('page_title', 'About Page - The Ministry of Sanitation and Water Resource')
@section('content')


<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">



        <section class="section">
            <div class="section-header">
                <h3>About Page</h3>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="accordion">
                        <div class="accordion">
                            <div class="accordion-header collapsed bg-secondary text-light p-1 " role="button"
                                data-toggle="collapse" data-target="#panel-body-1" aria-expanded="false">
                                <h4>Title for About Page</h4>
                            </div>
                            <div class="accordion-body collapse" id="panel-body-1" data-parent="#accordion" style="">
                                <form action="{{ route('about.title.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                            <div class="col-md-8">
                                    <div class="mb-3">

                                        <label for="title" class="form-label">About Title</label>
                                        <input type="text" class="form-control" name="about_title"
                                         value="{{ @$titles['about_title'] }}">
                                    </div>
                            </div>

                            <div class="col-md-8">
                                <div class="mb-3">
                                        <label for="subtitle" class="form-label">About SubTitle</label>
                                        <input type="text" class="form-control" name="about_subtitle"
                                         value="{{ @$titles['about_subtitle'] }}">
                                    </div>
                            </div>


                            <div class="col-md-8">
                                <div class="mb-3">
                                        <label for="title" class="form-label">Mission Title</label>
                                        <input type="text" class="form-control" name="mission_title"
                                         value="{{ @$titles['mission_title'] }}">
                                    </div>
                            </div>


                            <div class="col-md-8">
                                <div class="mb-3">
                                        <label for="title" class="form-label">Mandate Title</label>
                                        <input type="text" class="form-control" name="mandate_title"
                                         value="{{ @$titles['mandate_title'] }}">
                                    </div>
                            </div>


                            <div class="col-md-8">
                                <div class="mb-3">
                                        <label for="title" class="form-label">Arrangement Title</label>
                                        <input type="text" class="form-control" name="arrangement_title"
                                         value="{{ @$titles['arrangement_title'] }}">
                                    </div>
                            </div>


                            <div class="col-md-8">
                                <div class="mb-3">
                                        <label for="title" class="form-label">Core Value Title</label>
                                        <input type="text" class="form-control" name="core_value_title"
                                         value="{{ @$titles['core_value_title'] }}">
                                    </div>
                            </div>


                            <div class="col-md-8">
                                <div class="mb-3">
                                        <label for="title" class="form-label">Chief Director Title</label>
                                        <input type="text" class="form-control" name="chief_title"
                                         value="{{ @$titles['chief_title'] }}">
                                    </div>
                            </div>




                            <div class="text-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                             </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="section">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
        <ol class="breadcrumb m-0">
           <a href="{{route('about.create')}}"  class="btn btn-sm btn-secondary waves-effect waves-light float-end">
                <i class="mdi mdi-plus-circle">Create New</i> </a>
        </ol>
                    </div>
                    <h4 class="page-title">All Members</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Members Details</h5>
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

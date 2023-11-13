@extends('layout.backend_layout.master')
@section('page_title', 'Team - The Ministry of Sanitation and Water Resource')
@section('content')


<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">



        <section class="section">
            <div class="section-header">
                <h3>Team Members</h3>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="accordion">
                        <div class="accordion">
                            <div class="accordion-header collapsed bg-secondary text-light p-1 " role="button"
                                data-toggle="collapse" data-target="#panel-body-1" aria-expanded="false">
                                <h4>Title for team members</h4>
                            </div>
                            <div class="accordion-body collapse" id="panel-body-1" data-parent="#accordion" style="">
                                <form action="{{ route('title.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                            <div class="col-md-8">
                                    <div class="mb-3">

                                        <label for="title" class="form-label">Top Title</label>
                                        <input type="text" class="form-control" name="team_title"
                                         value="{{ @$titles['team_title'] }}">
                                    </div>
                            </div>

                            <div class="col-md-8">
                                <div class="mb-3">
                                        <label for="subtitle" class="form-label">SubTitle</label>
                                        <input type="text" class="form-control" name="team_subtitle"
                                         value="{{ @$titles['team_subtitle'] }}">
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
           <a href="{{route('team.create')}}"  class="btn btn-sm btn-secondary waves-effect waves-light float-end">
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

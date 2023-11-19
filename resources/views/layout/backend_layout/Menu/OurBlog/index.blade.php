@extends('layout.backend_layout.master')
@section('page_title', 'Our Blog - The Ministry of Sanitation and Water Resource')
@section('content')


<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">



        <section class="section">
            <div class="section-header">
                <h3>Our Blog</h3>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="accordion">
                        <div class="accordion">
                            <div class="accordion-header collapsed bg-secondary text-light p-1 " role="button"
                                data-toggle="collapse" data-target="#panel-body-1" aria-expanded="false">
                                <h4>Title for Our Blog</h4>
                            </div>
                            <div class="accordion-body collapse" id="panel-body-1" data-parent="#accordion" style="">
                                <form action="{{ route('ourblog.title.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                            <div class="col-md-8">
                                    <div class="mb-3">

                                        <label for="title" class="form-label">Top Title</label>
                                        <input type="text" class="form-control" name="ourblog_title"
                                         value="{{ @$titles['ourblog_title'] }}">
                                    </div>
                            </div>

                            <div class="col-md-8">
                                <div class="mb-3">
                                        <label for="subtitle" class="form-label">SubTitle</label>
                                        <input type="text" class="form-control" name="ourblog_subtitle"
                                         value="{{ @$titles['ourblog_subtitle'] }}">
                                    </div>
                            </div>


                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="ourblog_description" class="form-label"> Description </label>
                                    <textarea class="form-control" name="ourblog_description" id="ourblog_description" rows="3"
                                    >{{ @$titles['ourblog_description'] }}</textarea>

                                </div>
                            </div>



                            <div class="col-md-8">
                                <div class="mb-3">
                                <label for="ourblog_url" class="form-label"> Blog Link</label>
                                <input type="text" name="ourblog_url" class="form-control"
                                 value="{{ @$titles['ourblog_url'] }}">
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





    </div> <!-- container -->

</div> <!-- content -->


@endsection

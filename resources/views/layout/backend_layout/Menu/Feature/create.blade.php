@extends('layout.backend_layout.master')
@section('page_title', 'Create Feature - The Ministry of Sanitation and Water Resource')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
    <div class="col-12">
    <div class="page-title-box">
    <div class="page-title-right">
    </div>
    <h4 class="page-title">Create Features</h4>
    </div>

    <div class="col-md-12">
    <div class="card">
        <div class="card-body">

            <div class="tab-pane" id="settings">
                <form method="post" action="{{route('feature.store')}}" enctype="multipart/form-data" >
                @csrf


                <div class="row">

                    <div class="col-md-5">
                        <div class="mb-3">
                        <label>Icon</label>
                        <br>
                        <button class="btn btn-secondary" role="iconpicker" name="icon"></button>
                    </div>
                    </div>

                <div class="col-md-8">
                <div class="mb-3">
                <label for="firstname" class="form-label">Title</label>
                <input type="text" name="title" class="form-control " id="title" >



                </div>
                </div>


                <div class="col-md-8">
                    <div class="mb-3">
                    <label for="twi" class="form-label">Twi</label>
                    <input type="text" name="twi" class="form-control" id="twi" >


                    </div>
                </div>

                <div class="col-md-8">
                <div class="mb-3">
                <label for="firstname" class="form-label">Subtitle</label>
                <input type="text" name="subtitle" class="form-control" id="subtitle" >


                </div>
                </div>




                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="firstname" class="form-label"> Description </label>
                        <textarea class="form-control" name="description" id="description" rows="6"></textarea>

                    </div>
                </div>



                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="status" class="form-label"> Status</label>
                        <select name="status" class="form-select" id="" required>
                                <option value="1">YES</option>
                                <option value="0">NO</option>
                            </select>
                    </div>
                </div>



                </div> <!-- end row -->

                <div class="text-end">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Create</button>
                </div>

                </form>
                </div>

    </div> <!-- end card-->
    </div>
    </div>



            </div>
        </div>
        <!-- end page title -->




    </div> <!-- container -->

</div> <!-- content -->


@endsection

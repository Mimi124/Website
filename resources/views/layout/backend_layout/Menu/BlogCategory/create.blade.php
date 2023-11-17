@extends('layout.backend_layout.master')
@section('page_title', 'Create Blog Categories- The Ministry of Sanitation and Water Resource')
@section('content')



    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                        </div>
                        <h4 class="page-title">Create Blog Categories</h4>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="tab-pane" id="settings">
                                    <form method="post" action="{{ route('blogCategory.store') }}" enctype="multipart/form-data">
                                        @csrf


                                        <div class="row">


                                            <div class="col-md-8">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Category Name</label>
                                                    <input type="text" name="name" class="form-control "
                                                        id="name">



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


                                            <div class="text-end">
                                                <button type="submit"
                                                    class="btn btn-success waves-effect waves-light mt-2"><i
                                                        class="mdi mdi-content-save"></i> Create</button>
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

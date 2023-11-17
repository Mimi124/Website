@extends('layout.backend_layout.master')
@section('page_title', 'Edit Blog Categories - The Ministry of Sanitation and Water Resource')
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
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Blog Categories</a></li>

                            </ol>
                        </div>
                        <h4 class="page-title">Edit Blog Categories</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">


                <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">


                            <div class="tab-pane" id="settings">
                                <form method="post" action="{{ route('blogCategory.update', $category->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf


                                    <div class="row">


                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Category Name</label>
                                                <input type="text" name="name" class="form-control " id="name"
                                                    value="{{ $category->name }}">



                                            </div>
                                        </div>



                                        <div class="col-md-8 mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select name='status' id="" class="form-select" required>
                                                <option @selected($category->status === 1) value="1">Active</option>
                                                <option @selected($category->status === 0) value="0">Inactive</option>
                                            </select>
                                        </div>





                                    </div> <!-- end row -->

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Update</button>
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


@extends('layout.backend_layout.master')
@section('page_title', 'Update Agency - The Ministry of Sanitation and Water Resource')
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
                    <h4 class="page-title">Update Agency</h4>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                    <div class="tab-pane" id="settings">
                        <form method="post" action="{{ route('agency.update',$agency->id) }}" enctype="multipart/form-data" >
                        @csrf




            <div class="row">


                <div class="col-md-8">
                    <div class="mb-3">
                    <label for="firstname" class="form-label">Agency Name</label>
                    <input type="text" name="name" class="form-control " id="title" value="{{ $agency->name }}">



                    </div>
                </div>

                        <div class="col-md-8 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name='status' id="" class="form-select" required>
                                <option @selected($agency->status === 1) value="1">Active</option>
                                <option @selected($agency->status === 0) value="0">Inactive</option>
                            </select>
                        </div>

                        <div class="col-md-8">
                            <div class="mb-3">
                                    <label for="example-fileinput" class="form-label"> Image</label>
                                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                                      @error('image')
                                  <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                </div>
                             </div> <!-- end col -->


                               <div class="col-md-12">
                            <div class="mb-3">
                                    <label for="example-fileinput" class="form-label"> </label>
                                    <img id="showImage" src="{{  asset($agency->image) }}" class="rounded-circle avatar-lg img-thumbnail"
                                            alt="profile-image">
                                </div>


                                <div class="text-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Update</button>
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

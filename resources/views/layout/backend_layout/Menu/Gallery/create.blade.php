@extends('layout.backend_layout.master')
@section('page_title', 'Create Gallery - The Ministry of Sanitation and Water Resource')
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
                        <h4 class="page-title">Create Gallery</h4>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="tab-pane" id="settings">
                                    <form method="post" action="{{ route('gallery.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="status" class="form-label"> Status</label>
                                                <select name="status" class="form-select" id="" required>
                                                    <option value="1">YES</option>
                                                    <option value="0">NO</option>
                                                </select>
                                            </div>
                                        </div>


                                        {{-- <div class="col-md-8">
                                    <div class="mb-3">
                                    <label for="example-fileinput" class="form-label"> Image</label>
                                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                                    @error('image')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                    </div>
                                    </div> <!-- end col --> --}}


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="example-fileinput" class="form-label"> Image</label>
                                                <div class="col-sm-10">
                                                    <input name="image[]" class="form-control" type="file" id="image"
                                                        multiple="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="example-fileinput" class="form-label"> </label>
                                                <img id="showImage" src="{{ url('upload/no_image.jpg') }}"
                                                    class="img-thumbnail" alt="profile-image">
                                            </div>
                                        </div> <!-- end col -->


                                        <div class="text-end">
                                            <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
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


    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>


@endsection

@extends('layout.backend_layout.master')
@section('page_title', 'Create About Page - The Ministry of Sanitation and Water Resource')
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
                    <h4 class="page-title">Create About Page</h4>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="tab-pane" id="settings">
                                <form method="post" action="{{route('about.store')}}" enctype="multipart/form-data" >
                                @csrf


                 <div class="row">

                            <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label"> About Description </label>
                                            <textarea class="form-control" name="description" id="description" rows="5"></textarea>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label"> Sub Description </label>
                                            <textarea class="form-control" name="sub_description" id="sub_description" rows="5"></textarea>

                                        </div>
                                    </div>

                            </div>


                            <div class="col-md-12">
                                <div class="mb-3">
                                        <label for="about_image" class="form-label">About Image</label>
                                        <input type="file" name="about_image" id="image" class="form-control ">
                                </div>
                            </div> <!-- end col -->

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="example-fileinput" class="form-label"> </label>
                                    <img id="showImage" src="{{  url('upload/no_image.jpg') }}" class=" avatar-lg img-thumbnail"
                                    alt="profile-image">
                                </div>
                            </div> <!-- end col -->



                        <div class="row g-2">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label"><strong> Organisational Arrangement Description </strong> </label>
                                        <textarea class="form-control" name="arrangement_description" id="arrangement_description" rows="5"></textarea>

                                    </div>
                                </div>

                        </div>

                                 <div class="col-md-12">
                                    <div class="mb-3">
                                            <label for="arrangement_image" class="form-label">Organisational Arrangement Image</label>
                                            <input type="file" name="arrangement_image" id="arrangementimage" class="form-control ">
                                        </div>
                                     </div> <!-- end col -->
                        </div>

                        <div class = "row g-2">


                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="example-fileinput" class="form-label"> </label>
                                <img id="showArrangementImage" src="{{  url('upload/no_image.jpg') }}" class="avatar-lg img-thumbnail"
                                alt="profile-image">
                                </div>
                            </div> <!-- end col -->

                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="firstname" class="form-label"> <strong>Mandate Description </strong></label>
                                <textarea class="form-control" name="mandate_description" id="mandate_description" rows="5"></textarea>

                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="mandate" class="form-label"><strong> Mandate point 1 </strong> </label>
                                    <textarea class="form-control" name="mandate_sub" id="mandate_sub" rows="3"></textarea>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="mandate" class="form-label"><strong> Mandate point 2 </strong> </label>
                                    <textarea class="form-control" name="mandate_point" id="mandate_point" rows="3"></textarea>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="mandate" class="form-label"><strong> Mandate point 3 </strong> </label>
                                    <textarea class="form-control" name="mandate_last" id="mandate_last" rows="3"></textarea>

                                </div>
                            </div>
                        </div>


                        <div class="row g-2">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="mission" class="form-label"> <strong>Mission </strong></label>
                                    <textarea class="form-control" name="mission_description" id="mission_description" rows="5"></textarea>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="firstname" class="form-label"><strong> Office of the Chief Director </strong> </label>
                                    <textarea class="form-control" name="chief_description" id="chief_description" rows="5"></textarea>

                                </div>
                            </div>

                    </div>

                    <div class="row g-2">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="mandate" class="form-label"><strong> Core Value 1 </strong> </label>
                                <textarea class="form-control" name="value_1" id="value_1" rows="1"></textarea>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="mandate" class="form-label"><strong> Core Value 2 </strong> </label>
                                <textarea class="form-control" name="value_2" id="value_2" rows="1"></textarea>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="mandate" class="form-label"><strong> Core Value 3 </strong> </label>
                                <textarea class="form-control" name="value_3" id="value_3" rows="1"></textarea>

                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="mandate" class="form-label"><strong> Core Value 4 </strong> </label>
                                <textarea class="form-control" name="value_4" id="value_4" rows="1"></textarea>

                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="mandate" class="form-label"><strong> Core Value 5 </strong> </label>
                                <textarea class="form-control" name="value_5" id="value_5" rows="1"></textarea>

                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="mandate" class="form-label"><strong> Core Value 6 </strong> </label>
                                <textarea class="form-control" name="value_6" id="value_6" rows="1"></textarea>

                            </div>
                        </div>


                    </div>
                 </div>



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


<script type="text/javascript">

    $(document).ready(function(){
    $('#image').change(function(e){
    var reader = new FileReader();
    reader.onload =  function(e){
    $('#showImage').attr('src',e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
    });
    });
</script>



<script type="text/javascript">

    $(document).ready(function(){
    $('#mandateimage').change(function(e){
    var reader = new FileReader();
    reader.onload =  function(e){
    $('#showMandateImage').attr('src',e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
    });
    });
</script>

<script type="text/javascript">

    $(document).ready(function(){
    $('#arrangementimage').change(function(e){
    var reader = new FileReader();
    reader.onload =  function(e){
    $('#showArrangementImage').attr('src',e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
    });
    });
</script>

@endsection

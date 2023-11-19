@extends('layout.backend_layout.master')
@section('page_title', 'Create Carousel - The Ministry of Sanitation and Water Resource')
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
                    <h4 class="page-title">Create Sliders</h4>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="tab-pane" id="settings">
                                <form method="post" action="{{route('slider.store')}}" enctype="multipart/form-data" >
                                @csrf


                                <div class="row">


                                <div class="col-md-8">
                                <div class="mb-3">
                                <label for="firstname" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control " id="title" >



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
                                    <label for="button_link" class="form-label"> Button Link</label>
                                    <input type="text" name="button_link" class="form-control">
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

                                <div class="col-md-8">
                                    <div class="mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" name="image" id="image" class="form-control ">
                                        </div>
                                     </div> <!-- end col -->

                                     <div class="col-md-12">
                                        <div class="mb-3">
                                        <label for="example-fileinput" class="form-label"> </label>
                                        <img id="showImage" src="{{  url('upload/no_image.jpg') }}" class=" img-thumbnail"
                                        alt="profile-image">
                                        </div>
                                    </div> <!-- end col -->

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


@endsection

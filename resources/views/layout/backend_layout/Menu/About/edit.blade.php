@extends('layout.backend_layout.master')
@section('page_title', 'Edit About Page - The Ministry of Sanitation and Water Resource')
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Edit About Page</a></li>

                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit About Page</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

<div class="row">


  <div class="col-lg-8 col-xl-12">
<div class="card">
    <div class="card-body">


        <div class="tab-pane" id="settings">
            <form method="post" action="{{ route('about.update',$about->id) }}" enctype="multipart/form-data" >
                @csrf



<div class="row">

<div class="row g-2">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label"> About Description </label>
            <textarea class="form-control" name="description" id="description" rows="6">{{ $about->description }}</textarea>

        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label"> Sub Description </label>
            <textarea class="form-control" name="sub_description" id="sub_description" rows="6">{{ $about->sub_description }}</textarea>

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
        <img id="showImage" src="{{  asset($about->about_image) }}" class=" avatar-lg img-thumbnail"
        alt="about-image">
    </div>
</div> <!-- end col -->


<div class="row g-2">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="firstname" class="form-label"><strong> Organisational Arrangement Description </strong> </label>
            <textarea class="form-control" name="arrangement_description" id="arrangement_description" rows="5">{{ $about->arrangement_description }}</textarea>

        </div>
    </div>

</div>



<div class="col-md-12">
<div class="mb-3">
        <label for="arrangement_image" class="form-label">Organisational Arrangement Image</label>
        <input type="file" name="arrangement_image" id="arrangementimage" class="form-control ">
    </div>
    </div> <!-- end col -->


    <div class="col-md-6">
        <div class="mb-3">
        <label for="example-fileinput" class="form-label"> </label>
        <img id="showArrangementImage" src="{{  asset($about->arrangement_image) }}" class="avatar-lg img-thumbnail"
        alt="arrangement-image">
        </div>
    </div> <!-- end col -->


    <div class="col-md-12">
        <div class="mb-3">
            <label for="firstname" class="form-label"> <strong>Mandate Description </strong></label>
            <textarea class="form-control" name="mandate_description" id="mandate_description" rows="5">{{ $about->mandate_description }}</textarea>

        </div>
    </div>

<div class="row g-2">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="mandate" class="form-label"><strong> Mandate point 1 </strong> </label>
            <textarea class="form-control" name="mandate_sub" id="mandate_sub" rows="3">{{ $about->mandate_sub }}</textarea>

        </div>
   </div>
<div class="col-md-4">
    <div class="mb-3">
        <label for="mandate" class="form-label"><strong> Mandate point 2 </strong> </label>
        <textarea class="form-control" name="mandate_point" id="mandate_point" rows="3">{{ $about->mandate_point }}</textarea>

    </div>
</div>
<div class="col-md-4">
    <div class="mb-3">
        <label for="mandate" class="form-label"><strong> Mandate point 3 </strong> </label>
        <textarea class="form-control" name="mandate_last" id="mandate_last" rows="3">{{ $about->mandate_last }}</textarea>

    </div>
</div>
</div>


<div class="row g-2">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="mission" class="form-label"> <strong>Mission </strong></label>
            <textarea class="form-control" name="mission_description" id="mission_description" rows="5">{{ $about->mission_description }}</textarea>

        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label"><strong> Office of the Chief Director </strong> </label>
            <textarea class="form-control" name="chief_description" id="chief_description" rows="5">{{ $about->chief_description }}</textarea>

        </div>
    </div>

</div>


<div class="row g-2">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="mandate" class="form-label"><strong> Core Value 1 </strong> </label>
            <textarea class="form-control" name="value_1" id="value_1" rows="1">{{ $about->value_1 }}</textarea>

        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label for="mandate" class="form-label"><strong> Core Value 2 </strong> </label>
            <textarea class="form-control" name="value_2" id="value_2" rows="1">{{ $about->value_2 }}</textarea>

        </div>
    </div>

    <div class="col-md-4">
        <div class="mb-3">
            <label for="mandate" class="form-label"><strong> Core Value 3 </strong> </label>
            <textarea class="form-control" name="value_3" id="value_3" rows="1">{{ $about->value_3 }}</textarea>

        </div>
    </div>


    <div class="col-md-4">
        <div class="mb-3">
            <label for="mandate" class="form-label"><strong> Core Value 4 </strong> </label>
            <textarea class="form-control" name="value_4" id="value_4" rows="1">{{ $about->value_4 }}</textarea>

        </div>
    </div>


    <div class="col-md-4">
        <div class="mb-3">
            <label for="mandate" class="form-label"><strong> Core Value 5 </strong> </label>
            <textarea class="form-control" name="value_5" id="value_5" rows="1">{{ $about->value_5 }}</textarea>

        </div>
    </div>


    <div class="col-md-4">
        <div class="mb-3">
            <label for="mandate" class="form-label"><strong> Core Value 6 </strong> </label>
            <textarea class="form-control" name="value_6" id="value_6" rows="1">{{ $about->value_6 }}</textarea>

        </div>
    </div>


</div>



 </div> <!-- end row -->

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

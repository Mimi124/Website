@extends('layout.backend_layout.master')
@section('page_title', 'Edit Testimonial - The Ministry of Sanitation and Water Resource')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Testimonial</a></li>

                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit Testimonial</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

<div class="row">


  <div class="col-lg-8 col-xl-12">
<div class="card">
    <div class="card-body">


        <div class="tab-pane" id="settings">
            <form method="post" action="{{ route('testimonial.update',$testimonial->id) }}" enctype="multipart/form-data" >
            @csrf


            <div class="row">


            <div class="col-md-8">
                <div class="mb-3">
                <label for="firstname" class="form-label">Name</label>
                <input type="text" name="name" class="form-control " id="name" value="{{ $testimonial->name }}">



                </div>
            </div>

            <div class="col-md-8">
                <div class="mb-3">
                <label for="profession" class="form-label">Profession</label>
                <input type="text" name="profession" class="form-control " id="profession" value="{{ $testimonial->profession }}">



                </div>
            </div>



            <div class="col-md-8">
                <div class="mb-3">
                    <label for="review" class="form-label"> Review </label>
                    <textarea class="form-control" name="review" id="review" rows="6">{{ $testimonial->review }}</textarea>

                </div>
            </div>


            <div class="col-md-8 mb-3">
                <label for='show_at_home' class="form-label">Show at Home</label>
                <select name='show_at_home' id="" class="form-select" required>
                    <option @selected($testimonial->show_at_home === 0) value="0">NO</option>
                    <option @selected($testimonial->show_at_home === 1) value="1">YES</option>
                </select>
            </div>


            <div class="col-md-8 mb-3">
                <label for="status" class="form-label">Status</label>
                <select name='status' id="" class="form-select" required>
                    <option @selected($testimonial->status === 1) value="1">Active</option>
                    <option @selected($testimonial->status === 0) value="0">Inactive</option>
                </select>
            </div>



            <div class="col-md-8">
                <div class="mb-3">
                        <label for="image" class="form-label"> Image</label>
                        <input type="file" name="image" id="image" class="form-control ">
                    </div>
                 </div> <!-- end col -->


                   <div class="col-md-8">
                <div class="mb-3">
                        <label for="image" class="form-label"> </label>
                        <img id="image" src="{{  asset($testimonial->image) }}" class="rounded-circle avatar-lg img-thumbnail"
                                alt="slider-image">
                    </div>
                 </div> <!-- end col -->

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

@extends('layout.backend_layout.master')
@section('page_title', 'Edit Goal - The Ministry of Sanitation and Water Resource')
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Blog</a></li>

                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit Blog</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

<div class="row">


  <div class="col-lg-8 col-xl-12">
<div class="card">
    <div class="card-body">


        <div class="tab-pane" id="settings">
            <form method="post" action="{{ route('ourBlog.update',$ourblog->id) }}" enctype="multipart/form-data" >
            @csrf


            <div class="row">


            <div class="col-md-8">
            <div class="mb-3">
            <label for="topic" class="form-label">Topic</label>
            <input type="text" name="topic" class="form-control " id="topic" value="{{ $ourblog->topic }}">



            </div>
            </div>



            <div class="col-md-8">
                <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" class="form-control" id="date" value="{{ $ourblog->date }}">


                </div>
            </div>




            <div class="col-md-8">
                <div class="mb-3">
                    <label for="button_link" class="form-label"> Link</label>
                    <input type="text" name="button_link" class="form-control" value="{{ $ourblog->button_link }}">
                </div>
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
                        <img id="image" src="{{  asset($ourblog->image) }}" class="rounded-circle avatar-lg img-thumbnail"
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

@extends('layout.backend_layout.master')
@section('page_title', 'Edit Team - The Ministry of Sanitation and Water Resource')
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Members</a></li>

                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit Members</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

<div class="row">


  <div class="col-lg-8 col-xl-12">
<div class="card">
    <div class="card-body">


        <div class="tab-pane" id="settings">
            <form method="post" action="{{ route('team.update',$team->id) }}" enctype="multipart/form-data" >
            @csrf


            <div class="row">


            <div class="col-md-8">
            <div class="mb-3">
            <label for="firstname" class="form-label">Title</label>
            <input type="text" name="title" class="form-control " id="title" value="{{ $team->title }}">



            </div>
            </div>



            <div class="col-md-8">
                <div class="mb-3">
                <label for="firstname" class="form-label">Subtitle</label>
                <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ $team->subtitle }}">


                </div>
            </div>

            <div class="col-md-8">
                <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $team->name }}">


                </div>
            </div>


            <div class="col-md-8">
                <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" name="position" class="form-control" id="position" value="{{ $team->position }}">


                </div>
            </div>


>

            <div class="col-md-8">
                <div class="mb-3">
                    <label for="facebook_link" class="form-label"> Facebook Link</label>
                    <input type="text" name="facebook_link" class="form-control" value="{{ $team->facebook_link }}">
                </div>
            </div>

            <div class="col-md-8">
                <div class="mb-3">
                    <label for="twitter_link" class="form-label"> Twitter Link</label>
                    <input type="text" name="twitter_link" class="form-control" value="{{ $team->twitter_link }}">
                </div>
            </div>

            <div class="col-md-8">
                <div class="mb-3">
                    <label for="insta_link" class="form-label"> Instagram Link</label>
                    <input type="text" name="insta_link" class="form-control" value="{{ $team->insta_link }}">
                </div>
            </div>




            <div class="col-md-8 mb-3">
                <label for="status" class="form-label">Status</label>
                <select name='status' id="" class="form-select" required>
                    <option @selected($team->status === 1) value="1">Active</option>
                    <option @selected($team->status === 0) value="0">Inactive</option>
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
                        <img id="image" src="{{  asset($team->image) }}" class="rounded-circle avatar-lg img-thumbnail"
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

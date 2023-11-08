@extends('layout.backend_layout.master')

@section('page_title', 'Profile Page | MIMS SMS')

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>

                        </ol>
                    </div>
                    <h4 class="page-title">Profile</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->

<div class="row">
<div class="col-lg-4 col-xl-4">
<div class="card text-center">
<div class="card-body">
<img src="{{ (!empty($adminData->photo)) ? url('upload/profile_images/'.$adminData->photo) : url('upload/no_image.jpg') }}"
 class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">


 <h4 class="mb-0">{{ $adminData->name }}</h4>
 <p class="text-muted">{{ $adminData->email }}</p>

<button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
<button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

<div class="text-start mt-3">


    <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">{{ $adminData->name }}</span></p>

    <p class="text-muted mb-2 font-13"><strong>Phone Number :</strong><span class="ms-2">{{ $adminData->phone }}</span></p>

    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">{{ $adminData->email }}</span></p>

    <p class="text-muted mb-2 font-13"><strong>Address :</strong> <span class="ms-2">{{ $adminData->address }}</span></p>

    <p class="text-muted mb-2 font-13"><strong>Gender :</strong> <span class="ms-2">{{ $adminData->gender }}</span></p>

</div>                                    

<ul class="social-list list-inline mt-3 mb-0">
    <li class="list-inline-item">
        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
    </li>
    <li class="list-inline-item">
        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
    </li>
    <li class="list-inline-item">
        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
    </li>
    <li class="list-inline-item">
        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
    </li>
</ul>   
</div>                                 
</div> <!-- end card -->



            </div> <!-- end col-->

            <div class="col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-body">





<!-- end timeline content-->

<div class="tab-pane" id="settings">

<form method="post" action="{{route('profile.store')}}" enctype="multipart/form-data">
@csrf
<h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
<div class="row">
<div class="col-md-6">
    <div class="mb-3">
        <label for="name" class="form-label">First Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{ $adminData->name }}" >
    </div>
</div>
<div class="col-md-6">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" value="{{ $adminData->email }}" >
    </div>
</div> <!-- end col -->

<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone"  value="{{ $adminData->phone }}" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="address" name="address" class="form-control" id="address" value="{{ $adminData->address }}" >
        </div>
    </div> <!-- end col -->
    </div>
    
    <div class="col-md-12 mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select name='gender' id="gender" class="form-select" required>
            <option selected disabled >Select Gender </option>
            <option value='Male'>Male</option>
            <option value='Female'>Female</option>
            <option value='Unknown'>Unknown</option>
    
        </select>
    </div>



<div class="col-md-12">
<div class="mb-3">
<label for="photo" class="form-label">Profile Image</label>
<input type="file" id="image" name="photo" class="form-control">
</div>
</div> <!-- end col -->



<div class="col-md-12">
<div class="mb-3">
<label for="example-fileinput" class="form-label"> </label>
<img id="showImage" src="{{ (!empty($adminData->photo)) ? url('upload/profile_images/'.$adminData->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
    alt="profile-image">
</div>
</div> <!-- end col -->

</div> <!-- end row -->



<div class="text-end">
<button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
</div>
</form>
</div>
<!-- end settings content-->


                    </div>
                </div> <!-- end card-->

            </div> <!-- end col -->
        </div>
        <!-- end row-->

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
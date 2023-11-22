@extends('layout.backend_layout.master')
@section('page_title', 'Create Blog - The Ministry of Sanitation and Water Resource')
@section('content')

    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>



    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                        </div>
                        <h4 class="page-title">Create Blog </h4>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf


                                    <div class="row">


                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" name="title" class="form-control" id="topic"
                                                    value="{{ old('title') }}">



                                            </div>
                                        </div>



                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <label for="blog-category" class="form-label">Blog Category</label>
                                                <select name="category" class="form-control select2" id="">
                                                    <option value="">select</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach

                                                    <option value=""></option>

                                                </select>
                                            </div>
                                        </div>



                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Blog Post </label>
                                                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>

                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="seo_title" class="form-label">Seo Title</label>
                                            <input type="text" name="seo_title" class="form-control " id="topic"
                                                value="{{ old('seo_title') }}">



                                        </div>
                                    </div>



                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="seo_description" class="form-label"><strong> Seo Description
                                                </strong> </label>
                                            <textarea class="form-control" name="seo_description" id="seo_description" rows="3">{{ old('seo_description') }}</textarea>

                                        </div>
                                    </div>


                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="status" class="form-label"> Status</label>
                                            <select name="status" class="form-select" id="">
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
                                            <img id="showImage" src="{{ url('upload/no_image.jpg') }}" class="img-thumbnail"
                                                alt="profile-image">
                                        </div>
                                    </div> <!-- end col -->

                            </div> <!-- end row -->

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



    <script>
        $('#description').summernote({
            placeholder: 'description...',
            tabsize: 2,
            height: 300
        });
    </script>

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

@extends('layout.backend_layout.master')
@section('page_title', 'Create Blog - The Ministry of Sanitation and Water Resource')
@section('content')


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


                                        <div class="row">
                                            <div class="col-8">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="header-title">Blog Post</h4>

                                                        <textarea class="form-control" id="snow-editor" name='description' rows="15">

                                                            {{ old('description') }}


                                                        </textarea> <!-- end Snow-editor-->
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->



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
                                                    class=" avatar-lg img-thumbnail" alt="profile-image">
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

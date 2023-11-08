@extends('layout.backend_layout.master')
@section('page_title', 'Carousel - The Ministry of Sanitation and Water Resource')
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
                    <h4 class="page-title">Update Sliders</h4>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="tab-pane" id="settings">
                                <form method="post" action="{{route('slider.store')}}" enctype="multipart/form" >
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
                                            <label for="example-fileinput" class="form-label"> Image</label>
                                            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" ">
                                           
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


@endsection

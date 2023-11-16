@extends('layout.frontend_layout.master')
@section('page_title', 'Photo Gallery - The Ministry of Sanitation & Water Resources')
@section('content')




   <!-- Page Header Start -->
   <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Photo Gallery</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->



   <!-- Gallery Start -->
   <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="display-5 mb-5 text-primary">{!! @$sectionTitles['gallery_title'] !!}</h2>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline rounded mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">{!! @$sectionTitles['gallery_subtitle'] !!}</li>

                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
            @foreach($gallery as $key => $gallery)
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{asset($gallery->image) }}" alt="">
                    <div class="portfolio-text">
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset($gallery->image) }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Gallery End -->




@endsection

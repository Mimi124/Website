 <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">


            <div class="carousel-inner">
    @foreach($sliders as $key => $slider)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                    <img class="w-100" src="{{asset($slider->image) }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="display-2 text-white mb-5 animated slideInLeft">{!! $slider->title !!}</h2>

                                    @if ($slider->subtitle)
                                    <h3 class="display-5 text-white mb-5 animated slideInRight">{!! $slider->subtitle !!}</h3>
                                    @endif

                                    @if ($slider->description)
                                    <h4 class="display-8 text-white mb-5 animated slideInDown">{!! $slider->description !!}</h4>
                                    @endif

                                    @if ($slider->button_link)
                                    <a href="{{asset($slider->button_link) }}" class="btn btn-primary py-sm-6 px-sm-8">Read More</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> -



    {{-- <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">
                @foreach($sliders as $key => $slider)
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset($slider->image) }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h1 class="display-1 text-white mb-5 animated slideInDown">{!! $slider->title !!}</h1>
                                    <a href="{{asset($slider->button_link) }}" class="btn btn-primary py-sm-3 px-sm-4"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@endforeach
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> --}}

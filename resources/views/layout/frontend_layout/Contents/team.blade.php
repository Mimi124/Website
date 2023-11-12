<div class="container-xxl py-5">
    <div class="container">



        




        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
             {{-- <h2 class="text-success">{!! $item->title !!}</h2>
            <h5 class="display-7 mb-5">{!! $item->subtitle !!}</</h5> --}}
        </div>
        <div class="row g-4">
            @foreach ( $teams as $item)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="{{asset($item->image ) }}" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">{!! $item->name !!}</h4>
                        <p class="text-primary">{!! $item->position !!}</</p>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle me-2" href="{{asset($item->facebook_link) }}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle me-2" href="{{asset($item->twitter_link) }}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle me-2" href="{{asset($item->insta_link) }}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

    @endforeach

        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-end">
 @foreach ( $goals as $item)

            <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" data-wow-delay="0.1s" src="{{asset($item->image ) }}">
            </div>
            <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                <h3 class="text-success">{!! $item->title !!}</h3>
                    <h1 class="mb-4">{!! $item->subtitle !!}</h1>
                <p class="mb-4">{!! $item->description !!}</p>
                <a class="btn btn-primary py-3 px-4" href="{{asset($item->button_link) }}">Explore More</a>
            </div>
            <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-5">
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="border-start ps-4">
                            <i class="fa fa-eye fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3"> {!! $item->vision !!}</h4>
                            <span>{!! $item->vision_des !!}</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="border-start ps-4">
                            <i class="fa fa-users fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3">{!! $item->leadership !!}</h4>
                            <span>{!! $item->leadership_des !!}</span>
                        </div>
                    </div>
                </div>
            </div>
@endforeach
        </div>
    </div>
</div>


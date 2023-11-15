@foreach($facts as $key => $fact)

<div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="{{asset($fact->image) }}">
    <div class="container py-5">
        <div class="row g-5">

            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white" data-toggle=""></h1>
                <span class="fs-5 fw-semi-bold text-light"></span>
            </div>

            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-4 text-white" data-toggle="counter-up">{!! @$fact->project_counter !!}</h1>
                <span class="fs-5 fw-semi-bold text-light">{!! @$fact->title !!}</span>
            </div>



            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <h1 class="display-4 text-white" data-toggle="counter-up">{!! @$fact->staff_counter !!}</h1>
                <span class="fs-5 fw-semi-bold text-light">{!! @$fact->subtitle !!}</span>
            </div>

            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <h1 class="display-4 text-white" data-toggle=""></h1>
                <span class="fs-5 fw-semi-bold text-light"></span>
            </div>
@endforeach
        </div>
    </div>
</div>

     <!-- Testimonial Start -->
     <div class="container-fluid testimonial py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">{!! @$sectionTitles['testimonial_title'] !!}</h5>
                <h1>{!! @$sectionTitles['testimonial_subtitle'] !!}</h1>
            </div>

            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
                @foreach ( $testimonials as $item)
                <div class="testimonial-item border p-4">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{asset($item->image) }}" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">{!! $item->name !!}</h4>
                            <p class="m-0 pb-3">{!! $item->profession !!}</p>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">{!! $item->review !!}</p>
                    </div>
                </div>

@endforeach
            </div>
        </div>
    </div>

    <!-- Testimonial End -->

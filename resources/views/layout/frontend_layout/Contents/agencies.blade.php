<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h3 class="text-success">{!! @$sectionTitles['agency_title'] !!}</h3>

        </div>

        <div class="row g-4">
            @foreach($agency as $key => $item)
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-2" src="{{asset($item->image) }}" alt="">

                    <span class="text-primary">{!! $item->name !!}</span>

                </div>
            </div>

         @endforeach
        </div>
    </div>
</div>

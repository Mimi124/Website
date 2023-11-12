<div class="container-fluid top-feature py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            @foreach ( $features as $item)

            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="{{ $item->icon }}"></i>
                        </div>
                        <div class="ps-3">

                            @if ($item->title)
                            <h3>{!! $item->title !!}</h3>
                            @endif

                            @if ($item->twi)
                            <h4>{!! $item->twi !!}</h4>
                           @endif

                           @if ($item->subtitle)
                           <strong><p>{!! $item->subtitle !!}</p> </strong>
                          @endif

                          @if ($item->description)
                          <h4>{!! $item->description !!}</h4>
                         @endif
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>

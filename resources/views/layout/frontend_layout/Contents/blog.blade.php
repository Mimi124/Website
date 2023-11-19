<section class="home-blog-area pb-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="section-tittle mb-100">
                    <h2 class="text-success">{!! @$sectionTitles['ourblog_title'] !!}</h2>
                    <h5 class="display-6 mb-6">{!! @$sectionTitles['ourblog_subtitle'] !!}</h5>
                    <p>{!! @$sectionTitles['ourblog_description'] !!}</p>
                    <a href="{{ route('blog') }}" class="all-btn">View More</a>
                </div>
            </div>

@foreach ( $blogs as $item)
            <div class="col-lg-4 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="{{asset($item->image) }}" alt="{{ $item->title }}">
                        </div>
                        <div class="blog-cap">
                            <p><i class="fas fa-calendar-alt"></i> {{ date('F j, Y', strtotime($item->created_at)) }}</p>
                            <h3><a href="{{ route('blog.details', $item->slug) }}">{{ truncate($item->title, 30) }}</a></h3>
                        </div>
                    </div>
                </div>
            </div>
@endforeach

        </div>
    </div>
</section>

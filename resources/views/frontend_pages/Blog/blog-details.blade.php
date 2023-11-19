@extends('layout.frontend_layout.master')
@section('page_title', 'Blog Details - The Ministry of Sanitation & Water Resources')


@section('og_metatag_section')
<meta property="og:title" content="{{ $blog->seo_title }}">
<meta property="og:description" content="{{ $blog->seo_description }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ asset($blog->image) }}">
<meta property="og:type" content="website">
@endsection


@section('content')



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Blog Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!--? Blog Area Start -->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid w-100" src="{{ asset($blog->image) }}"
                                alt="{{ $blog->title }}">
                        </div>
                        <div class="blog_details">
                            <h2 style="color: #2d2d2d;">{!! $blog->title !!}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><i class="fa fa-user"></i>  By {{ $blog->user->name }}</li>
                                <li><i class="far fa-calendar-alt"></i> {{ date('F j, Y', strtotime($blog->created_at)) }}</li>
                            </ul>

                            {!! $blog->description !!}


                        </div>
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">

                            <div class="col-sm-4 text-right my-2 my-sm-0">

                            </div>
                            <ul class="social-icons">
                                <li>Share:</li>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title={{ $blog->title }}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="http://twitter.com/share?text={{ $blog->title }}&url={{ url()->current() }}"><i class="fa-brands fa-x-twitter fa-sm"></i></a></li>

                            </ul>
                        </div>
                        <div class="navigation-area">
                            @if ($previousBlog)
                            <div class="row">
                                <div
                                    class="col-lg-3 col-md-3 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="{{ route('blog.details', $previousBlog->slug) }}">
                                            <img class="img-fluid w-100" src="{{ asset($previousBlog->image) }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="{{ route('blog.details', $previousBlog->slug) }}">
                                            <span class="lnr text-white ti-arrow-left"></span>
                                        </a>
                                    </div>
                                    <div class="detials">
                                        <h5 class="btn btn-outline-success waves-effect waves-light ">Previous </h5>
                                        <a href="{{ route('blog.details', $previousBlog->slug) }}">
                                            <p style="color: #2d2d2d;">{{ truncate($previousBlog->title,30) }}</p>
                                        </a>
                                    </div>
                                </div>
                                @endif

                                <div class="col-lg-5  col-md-4 col-12 nav-right flex-row d-flex justify-content-start align-items-center">
                                </div>

                                @if ($nextBlog)
                                <div
                                    class="col-lg-3 col-md-3 col-12 nav-right flex-row d-flex justify-content-end align-items-center">

                                    <div class="detials">
                                        <h5 class="btn btn-outline-success waves-effect waves-light ">Next</h5>
                                        <a href="{{ route('blog.details', $nextBlog->slug) }}">
                                            <p style="color: #2d2d2d;">{{ truncate($nextBlog->title,30) }}</p>
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="{{ route('blog.details', $nextBlog->slug) }}">
                                            <span class="lnr text-white ti-arrow-right"></span>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="{{ route('blog.details', $nextBlog->slug) }}">

                                            <img class="img-fluid w-100" src="{{ asset($nextBlog->image) }}"
                                                alt="">

                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </section>
    <!-- Blog Area End -->


@endsection

@extends('layout.frontend_layout.master')
@section('page_title', 'Blog - The Ministry of Sanitation & Water Resources')
@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Blog</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!--? Blog Area Start-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach ($blogs as $blog)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset($blog->image) }}"
                                        alt="{{ $blog->title }}">
                                    <a href="{{ route('blog.details', $blog->slug) }}" class="blog_item_date">
                                        <small>{{ date('F j, Y', strtotime($blog->created_at)) }}</small>

                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('blog.details', $blog->slug) }}">
                                        <h2 class="blog-head" style="color: #2d2d2d;">
                                            {!! truncate($blog->title) !!}
                                        </h2>
                                    </a>

                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa-solid fa-hand-holding-droplet"></i>
                                                {{ $blog->category->name }}</a></li>

                                    </ul>
                                </div>
                            </article>
                        @endforeach


                        @if ($blogs->isEmpty())
                            <h5 class="text-center">No Blog Found!</h5>
                        @endif

                        @if ($blogs->hasPages())
                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">

                                    {{ $blogs->links() }}

                                </ul>
                            </nav>
                        @endif




                    </div>
                </div>





                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="{{ route('blog') }}" method="GET">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="search"
                                            value="{{ @request()->search }}" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">

                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-outline-success waves-effect waves-light  w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title" style="color: #2d2d2d;">Categories</h4>
                            <ul class="list cat-list">



                                @foreach ($categories as $category)
                                    <li><a href="{{ route('blog', ['category' => $category->slug]) }}">{{ $category->name }}
                                            <small
                                                class="btn btn-success waves-effect waves-light"">{{ $category->blogs_count }}</small></a>
                                    </li>
                                @endforeach





                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                            <div class="media post_item">

                                @foreach ($blogs as $blogs)
                                    <img src="{{ asset($blogs->image) }}" alt="{{ $blogs->title }}"
                                        class="img-fluid w-100">
                                    <div class="media-body">
                                        <a href="{{ route('blog.details', $blogs->slug) }}">
                                            <h3 style="color: #2d2d2d;">{{ truncate($blogs->title, 50) }}</h3>
                                        </a>
                                        <p><i
                                                class="far fa-calendar-alt"></i>{{ date('d m Y', strtotime($blogs->created_at)) }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>

                        </aside>


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <br>
                                <button class="btn btn-outline-success waves-effect waves-light w-100 btn_1 boxed-btn"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Blog Area End -->

@endsection

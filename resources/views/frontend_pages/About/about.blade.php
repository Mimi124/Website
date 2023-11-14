@extends('layout.frontend_layout.master')
@section('page_title', 'About - The Ministry of Sanitation & Water Resources')
@section('content')






<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-fluid py-5 my-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100 position-relative">
                    <img src="{{asset('frontend/assets/img/about-1.jpg')}}" class="img-fluid w-100 rounded" alt="" style="margin-bottom: 25%;">
                    <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <h3 class="text-success">About Us</h3>
                <h1 class="mb-4">Introduction</h1>
                <p>The Ministry of Sanitation and Water Resources (MSWR), is a Ministry in the Infrastructure Sector under the Office of the Head of Civil Service.
                It was established in January, 2017 to act and play a major role in the national, regional and global effort to provide the needed support to the sanitation and water sectors.
                    Until its establishment the water sector was part of the Ministry of Water Resources, Works and Housing and the sanitation sector was part of the Ministry of Local Government and Rural Development.</p>


                <p class="mb-4">The goal of the Ministry is “to contribute to improvement in the living standards of Ghanaians through increased access to and use of safe water,
                    sanitation and hygiene practices and sustainable management of water resources.”</p>

            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
@include('layout.frontend_layout.Contents.facts')
<!-- Facts End -->


<!-- Team Start -->
@include('layout.frontend_layout.Contents.team')
<!-- Team End -->





<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <h3 class="mb-30">Left Aligned</h3>
            <div class="row">
                <div class="col-md-3">
                    <img src="assets/img/elements/d.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-9 mt-sm-20">
                    <p>Recently, the US Federal government banned online casinos from operating in America by making
                        it illegal to
                        transfer money to them through any US bank or payment system. As a result of this law, most
                        of the popular
                        online casino networks such as Party Gaming and PlayTech left the United States. Overnight,
                        online casino
                        players found themselves being chased by the Federal government. But, after a fortnight, the
                        online casino
                        industry came up with a solution and new online casinos started taking root. These began to
                        operate under a
                        different business umbrella, and by doing that, rendered the transfer of money to and from
                        them legal. A major
                        part of this was enlisting electronic banking systems that would accept this new
                        clarification and start doing
                        business with me. Listed in this article are the electronic banking systems that accept
                        players from the United
                        States that wish to play in online casinos.</p>
                </div>
            </div>
        </div>
        <br>
        <div class="section-top-border text-right">
            <h3 class="mb-30">Right Aligned</h3>
            <div class="row">
                <div class="col-md-9">
                    <p class="text-right">Over time, even the most sophisticated, memory packed computer can begin
                        to run slow if we
                        don’t do something to prevent it. The reason why has less to do with how computers are made
                        and how they age and
                        more to do with the way we use them. You see, all of the daily tasks that we do on our PC
                        from running programs
                        to downloading and deleting software can make our computer sluggish. To keep this from
                        happening, you need to
                        understand the reasons why your PC is getting slower and do something to keep your PC
                        running at its best. You
                        can do this through regular maintenance and PC performance optimization programs</p>
                    <p class="text-right">Before we discuss all of the things that could be affecting your PC’s
                        performance, let’s
                        talk a little about what symptoms</p>
                </div>
                <div class="col-md-3">
                    <img src='{{asset('frontend/assets/img/t.jpg ') }}"' alt="" class="img-fluid">
                </div>
            </div>
        </div>


        <div class="section-top-border">
            <h3 class="mb-30">Block Quotes</h3>
            <div class="row">
                <div class="col-lg-12">
                    <blockquote class="generic-blockquote">
                        “Recently, the US Federal government banned online casinos from operating in America by
                        making it illegal to
                        transfer money to them through any US bank or payment system. As a result of this law, most
                        of the popular
                        online casino networks such as Party Gaming and PlayTech left the United States. Overnight,
                        online casino
                        players found themselves being chased by the Federal government. But, after a fortnight, the
                        online casino
                        industry came up with a solution and new online casinos started taking root. These began to
                        operate under a
                        different business umbrella, and by doing that, rendered the transfer of money to and from
                        them legal. A major
                        part of this was enlisting electronic banking systems that would accept this new
                        clarification and start doing
                        business with me. Listed in this article are the electronic banking”
                    </blockquote>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- End Align Area -->





@endsection

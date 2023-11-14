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
            <h3 class="mb-30">Organisational Arrangement</h3>
            <div class="row">
                <div class="col-md-3">
                    <img src="assets/img/elements/d.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-9 mt-sm-20">
                    <p>The activities of the Ministry is organised and coordinated by six (6) line directorates and one (1) unit.

                        The Ministry has oversight responsibility over three (3) Agencies. These Agencies implement the Ministry’s core policy areas
                         of Sanitation and Water.

                        The Ministry is the focal point for organising the activities of the sanitation and water sub sectors of the Government Machinery.

                        The organizational structure establishes positions for the office of the Honourable Minister, Deputy Minister, Chief Director as well
                        as four (4) line Directorates, two (2) Technical Directorates, and an Internal Audit unit.</p>
                </div>
            </div>
        </div>
        <br>
        <div class="section-top-border text-right">
            <h3 class="mb-30"> Mandate</h3>
            <div class="row">
                <div class="col-md-9">
                    <p class="text-right">The Ministry derives its core mandate primarily from article 190 of the 1992 constitution of the Republic of Ghana,
                         the Civil Service Law, 1993 (PNDCL 327) and the Civil Service (Ministry) Instrument, 2017 (EI 28), which stipulate that the Ministry shall:</p>
                         <div class="">
                            <ul>
                                <li>Initiate and formulate water, environmental health and sanitation policies taking into account the needs and aspirations of the people;</li>
                                <li>Undertake water and environmental sanitation sub sectors development planning in consultation with the National Development Planning Commission (NDPC);</li>
                                <li>Co-ordinate, monitor and evaluate the efficiency and effectiveness of the performance of the sanitation and water sub sectors.</li>
                             
                            </ul>
                        </div>
                </div>
                <div class="col-md-3">
                    <img src='{{asset('frontend/assets/img/t.jpg ') }}"' alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="section-top-border">

            <div class="row">
                <div class="col-md-4">
                    <div class="single-defination">
                        <h4 class="mb-20">Mission</h4>
                        <p>To formulate and implement policies, plans and programmes for the sustainable management of the nation’s water resources, the provision of safe,
                             adequate and affordable water; provision of environmental sanitation facilities, effective and sustainable management of liquid
                              and solid waste for the well-being of all people living in the country.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-defination">
                        <h4 class="mb-20"></h4>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-defination">
                        <h4 class="mb-20">Core Value</h4>
                        <div class="">
                            <ul>
                                <li>Excellence</li>
                                <li>Transparency</li>
                                <li>Sustainability</li>
                                <li>Competence</li>
                                <li>Accountability</li>
                                <li>Impact and Outcome Driven</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="section-top-border">
            <h3 class="mb-30">  Office of the Chief Director </h3>
            <div class="row">
                <div class="col-lg-12">
                    <blockquote class="generic-blockquote">
                        The Chief Director is the administrative head and supervises the formulation of effective and efficient sector
                         policies and ensures the consistent implementation of these policies and management practices within the Ministry,
                         its Departments and Agencies.  In addition, responsible for
                         the co-ordination and monitoring of all the activities of the various Directorates, and Agencies, to ensure the achievement of sector goals and objectives.
                    </blockquote>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- End Align Area -->





@endsection

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
 @foreach ( $about as $item)
            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100 position-relative">
                    <img src="{{$item->image}}" class="img-fluid w-100 rounded" alt="" style="margin-bottom: 25%;">
                    <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <h3 class="text-success">{!! @$sectionTitles['about_title'] !!}</h3>
                <h1 class="mb-4">{!! @$sectionTitles['about_subtitle'] !!}</h1>

                <p>{!! $item->description !!}</p>


                <p class="mb-4">{!! $item->sub_description !!} </p>

            </div>
 @endforeach
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
@include('layout.frontend_layout.Contents.facts')
<!-- Facts End -->








<div class="whole-wrap">
    <div class="container box_1170">
    @foreach ( $about as $item)

        <div class="section-top-border text-right">
            <h3 class="mb-30"> {!! @$sectionTitles['mandate_title'] !!}</h3>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-right">{!! $item->mandate_description !!}</p>
                         <div class="">
                            <ul>
                                <li>{!! $item->mandate_sub !!}</li>
                                <li>{!! $item->mandate_point !!}</li>
                                <li>{!! $item->mandate_last!!}</li>

                            </ul>
                        </div>
                </div>
                {{-- <div class="col-md-3">
                    <img src="{{ asset('frontend/assets/img/icon/icon-9.png') }}"  alt="" class="img-fluid w-50 rounded">
                </div> --}}
            </div>

        </div>

        <div class="section-top-border">
            <h3 class="mb-30">{!! @$sectionTitles['arrangement_title'] !!}</h3>
            <div class="row">

                <div class="col-md-3">
                    <img src="{{asset($item->arrangement_image) }}"" alt="" class="img-fluid w-100 rounded">
                </div>
                <div class="col-md-9 mt-sm-20">
                    <p>{!! $item->arrangement_description !!}</p>
                </div>
            </div>
        </div>
    <!-- Team Start -->
@include('layout.frontend_layout.Contents.team')
<!-- Team End -->

        <div class="section-top-border">

            <div class="row">
                <div class="col-md-12">
                    <div class="single-defination">
                        <h4 class="mb-20">{!! @$sectionTitles['mission_title'] !!}</h4>
                        <p>{!! $item->mission_description !!}</p>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="single-defination">
                        <h4 class="mb-20"></h4>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-defination">
                        <h4 class="mb-20">{!! @$sectionTitles['core_value_title'] !!}</h4>
                        <div class="">
                            <ul>
                                <li>{!! $item->value_1 !!}</li>
                                <li>{!! $item->value_2!!}</li>
                                <li>{!! $item->value_3 !!}</li>
                                <li>{!! $item->value_4 !!}</li>
                                <li>{!! $item->value_5 !!}</li>
                                <li>{!! $item->value_6 !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="section-top-border">
            <h3 class="mb-30">  {!! @$sectionTitles['chief_title'] !!} </h3>
            <div class="row">
                <div class="col-lg-12">
                    <blockquote class="generic-blockquote">
                        {!! $item->chief_description !!}
                    </blockquote>
                </div>
            </div>
        </div>


    </div>
@endforeach
</div>

<!-- End Align Area -->





@endsection

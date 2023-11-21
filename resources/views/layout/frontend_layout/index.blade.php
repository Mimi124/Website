@extends('layout.frontend_layout.master')
@section('page_title', 'Home - The Ministry of Sanitation & Water Resources')

@section('content')



<!-- Carousel Start -->
@include('layout.frontend_layout.Contents.slider')
<!-- Carousel End -->

<!-- Top Feature Start -->
@include('layout.frontend_layout.Contents.feature')
<!-- Top Feature End -->


<!-- About Start -->
@include('layout.frontend_layout.Contents.goal')
<!-- About End -->


<!-- Team Start -->
@include('layout.frontend_layout.Contents.team')
<!-- Team End -->

<!-- Facts Start -->
@include('layout.frontend_layout.Contents.facts')
<!-- Facts End -->


<!-- Blog Start -->
@include('layout.frontend_layout.Contents.blog')
<!-- Blog End -->

<!-- Blog Start -->
@include('layout.frontend_layout.Contents.events')
<!-- Blog End -->


<!-- Blog Start -->
@include('layout.frontend_layout.Contents.projects')
<!-- Blog End -->


<!-- Testimonials Start -->
@include('layout.frontend_layout.Contents.testimonial')
<!-- Testimonials End -->

 <!-- Clients Section - Home Page -->
 @include('layout.frontend_layout.Contents.agencies')
  <!-- End Clients Section -->


@endsection


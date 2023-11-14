<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.frontend_layout.body.css')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    @include('layout.frontend_layout.body.header')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('layout.frontend_layout.body.navbar')
    <!-- Navbar End -->


    <!-- Carousel Start -->
        @yield('content')
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


    <!-- Footer Start -->

    @include('layout.frontend_layout.body.footer')
    <!-- Footer End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/assets/lib/wow/wow.min.js ') }}"></script>
    <script src="{{asset('frontend/assets/lib/easing/easing.min.js ') }}"></script>
    <script src="{{asset('frontend/assets/lib/waypoints/waypoints.min.js ') }}"></script>
    <script src="{{asset('frontend/assets/lib/owlcarousel/owl.carousel.min.js ') }}"></script>
    <script src="{{asset('frontend/assets/lib/counterup/counterup.min.js ') }}"></script>
    <script src="{{asset('frontend/assets/lib/parallax/parallax.min.js ') }}"></script>
    <script src="{{asset('frontend/assets/lib/isotope/isotope.pkgd.min.js ') }}"></script>
    <script src="{{asset('frontend/assets/lib/lightbox/js/lightbox.min.js ') }}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>

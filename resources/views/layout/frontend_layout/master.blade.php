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
    <div class="container-fluid top-feature py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-times text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h3>Let's clean Ghana</h3>
                                <h4>Sesa wo suban</h4>
                                <span>(Change your habit)</span>
                                <h5>Play Your Part</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-phone-alt text-success fa-2x"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Whatsapp Line for Reporting Dumping of Waste Illegally</h4>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-phone text-success"></i>
                            </div>
                            <div class="ps-3">
                                <h4>24/7 Available</h4>
                                <p></p>
                                 <h5>020-246-4444</h5>
                                <h5>020-246-4411</h5>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <!-- Top Feature End -->




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
    <script src="{{asset('frontend/assets/js/main.js ') }}"></script>
</body>

</html>
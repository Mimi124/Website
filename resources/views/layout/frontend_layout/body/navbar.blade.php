<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="{{asset('frontend/assets/img/Sanitation-logo-1.png ' ) }}" class="img-fluid w-50 rounded" alt="" style="margin-bottom: 1%;">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="service.html" class="nav-item nav-link"></a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Events Calender</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="team.html" class="dropdown-item">Upcoming Events</a>
                    <a href="testimonial.html" class="dropdown-item">Ongoing Events</a>
                    <a href="404.html" class="dropdown-item">Past Events</a>
                </div>
            </div>
            <a href="" class="nav-item nav-link">Projects</a>


            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Media</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ route('blog') }}" class="dropdown-item">News and Notice</a>
                    <a href="{{ route('blog-details') }}" class="dropdown-item">Blog Details</a>
                    <a href="{{ route('gallery') }}" class="dropdown-item">Photo Gallery</a>
                    <a href="team.html" class="dropdown-item">Videos</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <img src="{{asset('frontend/assets/img/flags/gh.png ' ) }}" height="80"  >
    </div>
</nav>


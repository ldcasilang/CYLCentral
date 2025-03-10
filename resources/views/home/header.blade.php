<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="about.html" class="nav-item nav-link">About</a>
            <a href="service.html" class="nav-item nav-link">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                <div class="dropdown-menu m-0">
                    <a href="blog.html" class="dropdown-item">Blog Grid</a>
                    <a href="detail.html" class="dropdown-item">Blog Detail</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="price.html" class="dropdown-item">Pricing Plan</a>
                    <a href="feature.html" class="dropdown-item">Our features</a>
                    <a href="team.html" class="dropdown-item">Team Members</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="quote.html" class="dropdown-item">Free Quote</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a>

            @if (Route::has('login'))
            
            @auth
            <x-app-layout>
    
            </x-app-layout>
         
            @else
            <a href="{{ route('login')}}" class="nav-item nav-link btn btn-primary" id="logincss">Login</a>
            <a href="{{ route('register')}}" class="nav-item nav-link btn btn-success">Register</a>
            @endauth

            @endif
        </div>
        <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
        <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a>
    </div>
</nav>

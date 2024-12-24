@extends('frontend.layouts.master')

@section('content')

<main class="container my-5">

    <!-- Hero Section -->
    <section id="hero" class="text-center py-5 mb-5" style="background: linear-gradient(90deg, #4facfe, #00f2fe); color: white; border-radius: 12px;">
        <img src="" alt="">
        <h1 class="display-4 fw-bold">Welcome to CloudCore</h1>
        <p class="lead">
            Simplify Digital
            Experience.</p>
        <a href="#services" class="btn btn-light btn-lg shadow">Explore Services</a>
    </section>
    <!-- Hero Section -->

<!-- Hero Section -->
{{-- <section id="hero" class="text-center py-5 mb-5 position-relative"
    style="background: url('{{ asset('frontend/them.jpg') }}') no-repeat center center/cover; color: white; border-radius: 12px; overflow: hidden;">
    <div class="hero-overlay"
        style="position: absolute; top: 0; left: 0; height: 700px; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); border-radius: 12px;">
    </div>
    <div class="container position-relative" style="z-index: 1; margin-top: 340px;">
        <h1 class="display-4 fw-bold">Welcome to My Laravel App please Login</h1>
        <p class="lead">Your one-stop solution for all your needs.</p>
        <a href="#services" class="btn btn-light btn-lg shadow">Explore Services</a>
    </div>
</section> --}}



    <section id="about" class="my-5">
        <h2 class="text-center text-primary mb-4">About Me</h2>
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <p>Hello I am <strong>Sazal Abdullah</strong>, a Full Stack Developer specializing in PHP and Laravel. I am passionate about building robust web applications and delivering excellent user experiences. Let's collaborate and create something amazing together!</p>
                <div class="mt-4">
                    <a href="https://drive.google.com/file/d/1DVaAql_WkbPAi1wtFy0SHfCX9rk-nBm0/view" target="_blank" class="btn btn-primary btn-lg mx-2" target="_blank">
                        <i class="fas fa-file-download"></i> View CV
                    </a>
                    <a href="https://sazal-portfolio.netlify.app" class="btn btn-secondary btn-lg mx-2" target="_blank">
                        <i class="fas fa-globe"></i> View Portfolio
                    </a>
                </div>
            </div>
        </div>
    </section>



    <section id="services" class="my-5">
        <h2 class="text-center text-primary mb-4">Our Services</h2>
        <div class="row text-center g-4">
            <!-- Service 1: Web Design -->
            <div class="col-md-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <i class="fas fa-paint-brush fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Web Design</h5>
                        <p class="card-text">Beautiful and elegant designs with interfaces that are intuitive, efficient, and pleasant to use for the user.</p>
                    </div>
                </div>
            </div>
            <!-- Service 2: Development -->
            <div class="col-md-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <i class="fas fa-code fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Development</h5>
                        <p class="card-text">Custom web development tailored to your specifications, designed to provide user experience.</p>
                    </div>
                </div>
            </div>
            <!-- Service 3: Mobile App -->
            <div class="col-md-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <i class="fas fa-mobile-alt fa-3x text-info mb-3"></i>
                        <h5 class="card-title">Mobile App</h5>
                        <p class="card-text">Design and transform website projects into mobile apps to provide a seamless user experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Contact Us Section -->
    <section id="contact" class="my-5">
        <h2 class="text-center text-primary mb-4">Contact Us</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
    </section>
</main>

@endsection

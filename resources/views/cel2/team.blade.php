@extends('layouts.secondary')

@section('content')

<main class="main">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Awesome Page Title -->
    <div class="page-title-awesome" data-aos="fade">
        <!-- Floating Code Elements -->
        <div class="floating-code">&lt;div&gt;Team&lt;/div&gt;</div>
        <div class="floating-code">function awesome() {}</div>
        <div class="floating-code">.page-title { }</div>
        <div class="floating-code">const team = [];</div>
        <div class="floating-code">@media query { }</div>

        <!-- Animated Particles -->
        <div class="particles" id="particles"></div>

        <div class="container">
            <h1>Our Team</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li class="current">Team</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Initialize AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Create animated particles
        document.addEventListener('DOMContentLoaded', function() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 20;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                // Random properties
                const size = Math.random() * 4 + 1;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const delay = Math.random() * 6;
                const duration = Math.random() * 4 + 4;
                
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                particle.style.animationDelay = `${delay}s`;
                particle.style.animationDuration = `${duration}s`;
                
                // Random color variation
                const colors = ['#4361ee', '#4895ef', '#7209b7', '#f72585'];
                const randomColor = colors[Math.floor(Math.random() * colors.length)];
                particle.style.background = randomColor;
                
                particlesContainer.appendChild(particle);
            }
        });
    </script>

  <!-- Team Section -->
@include('layouts/partials.teamComponent')

</main>

@endsection
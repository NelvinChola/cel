@extends('layouts.secondary')

@section('content')

<style>
/* Production Mobile Fix for Team Page */
.cel-team-main {
    font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
    background: #f8fafc;
}

/* Mobile-Optimized Page Title */
.cel-team-hero {
    position: relative;
    padding: 80px 20px 50px !important;
    background: linear-gradient(135deg, #1d3557 0%, #0c1b33 100%);
    overflow: hidden;
    min-height: 40vh;
    display: flex;
    align-items: center;
    text-align: center;
}

.cel-team-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url(https://plus.unsplash.com/premium_photo-1663100722417-6e36673fe0ed?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Y29kaW5nJTIwaGFuZHN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&q=60&w=600);
    background-size: cover;
    background-position: center;
    opacity: 0.3;
    z-index: 1;
}

.cel-team-hero::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(67, 97, 238, 0.9) 0%, rgba(114, 9, 183, 0.7) 100%);
    z-index: 2;
}

.cel-team-hero .container {
    position: relative;
    z-index: 3;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px !important;
}

.cel-team-hero h1 {
    font-size: 2.2rem !important;
    font-weight: 800;
    color: white;
    margin-bottom: 1.5rem;
    line-height: 1.2;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
}

.cel-team-breadcrumbs {
    display: inline-block;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    padding: 12px 20px !important;
    max-width: 90%;
}

.cel-team-breadcrumbs ol {
    display: flex;
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 8px;
    flex-wrap: wrap;
    justify-content: center;
}

.cel-team-breadcrumbs li {
    display: flex;
    align-items: center;
    font-size: 0.9rem;
    font-weight: 500;
    color: rgba(255, 255, 255, 0.9);
}

.cel-team-breadcrumbs li:not(:last-child)::after {
    content: '›';
    margin-left: 8px;
    color: #ffc107;
    font-weight: 700;
}

.cel-team-breadcrumbs a {
    color: rgba(255, 255, 255, 0.9);
    text-decoration: none;
    padding: 4px 8px;
    border-radius: 15px;
    transition: all 0.3s ease;
}

.cel-team-breadcrumbs a:active {
    color: white;
    background: rgba(255, 193, 7, 0.2);
}

.cel-team-breadcrumbs .current {
    color: #ffc107;
    font-weight: 600;
}

/* Team Section Wrapper */
.cel-team-section-wrapper {
    padding: 50px 20px !important;
    background: white;
}

/* Hide heavy animations on mobile for performance */
.cel-floating-code,
.cel-particles {
    display: none;
}

/* Tablet Styles */
@media (min-width: 768px) {
    .cel-team-hero {
        padding: 120px 20px 80px !important;
        min-height: 50vh;
    }
    
    .cel-team-hero h1 {
        font-size: 3rem !important;
    }
    
    .cel-team-breadcrumbs {
        padding: 15px 25px !important;
        max-width: none;
    }
    
    .cel-team-breadcrumbs ol {
        gap: 12px;
    }
    
    .cel-team-breadcrumbs li {
        font-size: 1rem;
    }
    
    .cel-team-section-wrapper {
        padding: 70px 20px !important;
    }
    
    /* Show animations on tablet+ */
    .cel-floating-code {
        display: block;
        position: absolute;
        font-family: 'Courier New', monospace;
        font-weight: bold;
        color: rgba(255, 255, 255, 0.1);
        font-size: 1rem;
        z-index: 3;
        animation: cel-floatCode 20s linear infinite;
    }
    
    .cel-floating-code:nth-child(1) { top: 20%; left: 5%; animation-delay: 0s; }
    .cel-floating-code:nth-child(2) { top: 60%; right: 5%; animation-delay: -5s; }
    .cel-floating-code:nth-child(3) { top: 40%; left: 10%; animation-delay: -10s; }
    
    @keyframes cel-floatCode {
        0% { transform: translateY(0px) rotate(0deg); opacity: 0.1; }
        50% { transform: translateY(-15px) rotate(180deg); opacity: 0.15; }
        100% { transform: translateY(0px) rotate(360deg); opacity: 0.1; }
    }
}

/* Desktop Styles */
@media (min-width: 1024px) {
    .cel-team-hero {
        padding: 140px 20px 100px !important;
        min-height: 60vh;
    }
    
    .cel-team-hero h1 {
        font-size: 4rem !important;
    }
    
    .cel-team-section-wrapper {
        padding: 100px 20px !important;
    }
    
    /* Show particles on desktop */
    .cel-particles {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 3;
        pointer-events: none;
    }
}

/* Large Desktop Styles */
@media (min-width: 1200px) {
    .cel-team-hero {
        padding: 160px 20px 120px !important;
    }
    
    .cel-team-hero h1 {
        font-size: 4.5rem !important;
    }
}

/* Very small phones */
@media (max-width: 360px) {
    .cel-team-hero {
        padding: 60px 15px 40px !important;
    }
    
    .cel-team-hero h1 {
        font-size: 1.8rem !important;
        margin-bottom: 1rem;
    }
    
    .cel-team-breadcrumbs {
        padding: 10px 15px !important;
    }
    
    .cel-team-breadcrumbs ol {
        flex-direction: column;
        gap: 5px;
    }
    
    .cel-team-breadcrumbs li:not(:last-child)::after {
        display: none;
    }
    
    .cel-team-section-wrapper {
        padding: 40px 15px !important;
    }
}

/* Force mobile styles with !important */
@media (max-width: 768px) {
    .page-title-awesome,
    .cel-team-hero {
        padding: 80px 20px 50px !important;
    }
    
    .page-title-awesome h1,
    .cel-team-hero h1 {
        font-size: 2.2rem !important;
        padding: 0 10px !important;
    }
    
    .breadcrumbs,
    .cel-team-breadcrumbs {
        padding: 12px 20px !important;
        margin: 0 10px !important;
    }
    
    .floating-code,
    .particles {
        display: none !important;
    }
}

/* Animation for AOS */
[data-aos] {
    transition-duration: 0.8s;
}

/* Disable AOS on mobile for better performance */
@media (max-width: 768px) {
    [data-aos] {
        opacity: 1 !important;
        transform: none !important;
        transition: none !important;
    }
}
</style>

<main class="main cel-team-main">

    <!-- Mobile-Optimized Page Title -->
    <div class="cel-team-hero page-title-awesome" data-aos="fade">
        <!-- Floating Code Elements - Hidden on Mobile -->
        <div class="cel-floating-code floating-code">&lt;div&gt;Team&lt;/div&gt;</div>
        <div class="cel-floating-code floating-code">function awesome() {}</div>
        <div class="cel-floating-code floating-code">.page-title { }</div>

        <!-- Animated Particles - Hidden on Mobile -->
        <div class="cel-particles particles" id="particles"></div>

        <div class="container">
            <h1>Our Team</h1>
            <nav class="cel-team-breadcrumbs breadcrumbs">
                <ol>
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li class="current">Team</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Team Section -->
    <div class="cel-team-section-wrapper">
        @include('layouts/partials.teamComponent')
    </div>

</main>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Initialize AOS with mobile-friendly settings
    document.addEventListener('DOMContentLoaded', function() {
        // Only initialize AOS on larger screens
        if (window.innerWidth > 768) {
            AOS.init({
                duration: 800,
                once: true,
                offset: 50
            });
        }

        // Create animated particles only on desktop
        if (window.innerWidth > 1024) {
            const particlesContainer = document.getElementById('particles');
            if (particlesContainer) {
                const particleCount = 15;
                
                for (let i = 0; i < particleCount; i++) {
                    const particle = document.createElement('div');
                    particle.className = 'particle';
                    
                    // Random properties
                    const size = Math.random() * 3 + 1;
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
            }
        }
        
        // Debug: Check if mobile styles are applied
        console.log('Mobile debug - Window width:', window.innerWidth);
        console.log('Is mobile:', window.innerWidth <= 768);
    });
</script>

@endsection
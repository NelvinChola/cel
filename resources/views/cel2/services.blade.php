@extends('layouts.secondary')

@section('content')

 <main class="main">
     <!-- Modern Hero Section -->
    <section class="services-hero" data-aos="fade">
        <!-- Background with Multiple Layers -->
        <div class="hero-background">
            <div class="bg-layer base-layer" style="background-image: url(assets/img/hardware.jpg);"></div>
            <div class="bg-layer overlay-layer"></div>
            <div class="bg-layer gradient-layer"></div>
            
            <!-- Animated Particles -->
            <div class="particles-container">
                <div class="particle particle-1"></div>
                <div class="particle particle-2"></div>
                <div class="particle particle-3"></div>
                <div class="particle particle-4"></div>
                <div class="particle particle-5"></div>
                <div class="particle particle-6"></div>
            </div>
            
            <!-- Floating Shapes -->
            <div class="floating-shapes">
                <div class="shape shape-circle shape-1"></div>
                <div class="shape shape-triangle shape-2"></div>
                <div class="shape shape-square shape-3"></div>
                <div class="shape shape-circle shape-4"></div>
            </div>
        </div>

        <div class="container position-relative z-3">
            <div class="row align-items-center min-vh-70 py-5">
                <div class="col-lg-8 text-center text-lg-start">
                    <!-- Animated Badge -->
                    <div class="hero-badge mb-4" data-aos="fade-up" data-aos-delay="200">
                        <span class="badge bg-warning text-dark rounded-pill px-4 py-2">
                            <i class="fas fa-rocket me-2"></i>Transform Your Business
                        </span>
                    </div>

                    <!-- Main Heading with Typing Effect -->
                    <h1 class="hero-title display-3 fw-bold text-white mb-4" data-aos="fade-up" data-aos-delay="300">
                        <span class="text-gradient-primary">Digital Solutions</span> 
                        <br>
                        <span class="typing-text">That Drive Growth</span>
                    </h1>

                    <!-- Animated Description -->
                    <p class="hero-subtitle lead text-light mb-5" data-aos="fade-up" data-aos-delay="400">
                        We deliver cutting-edge technology services that transform operations, 
                        boost efficiency, and create sustainable competitive advantages for your business.
                    </p>

                    <!-- Interactive CTA Buttons -->
                    <div class="hero-actions" data-aos="fade-up" data-aos-delay="500">
                        <a href="#services" class="btn btn-warning btn-lg px-5 py-3 me-3 mb-3 fw-bold btn-glow">
                            <i class="fas fa-play-circle me-2"></i>Explore Services
                        </a>
                        <a href="{{ route('contact.show') }}" class="btn btn-outline-light btn-lg px-5 py-3 mb-3 btn-hover-grow">
                            <i class="fas fa-calendar me-2"></i>Get Consultation
                        </a>
                    </div>

                    <!-- Quick Stats -->
                    {{-- <div class="hero-stats mt-5" data-aos="fade-up" data-aos-delay="600">
                        <div class="row g-4">
                            <div class="col-auto">
                                <div class="stat-item">
                                    <div class="stat-number text-warning fw-bold" data-count="150">0</div>
                                    <div class="stat-label text-light">Projects</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="stat-item">
                                    <div class="stat-number text-info fw-bold" data-count="50">0</div>
                                    <div class="stat-label text-light">Clients</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="stat-item">
                                    <div class="stat-number text-success fw-bold" data-count="24">0</div>
                                    <div class="stat-label text-light">Support</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <!-- Animated Visual Elements -->
                <div class="col-lg-4 text-center" data-aos="fade-left" data-aos-delay="700">
                    <div class="hero-visual">
                        <!-- Floating Service Icons -->
                        <div class="floating-icon icon-1 bg-primary">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="floating-icon icon-2 bg-success">
                            <i class="fas fa-robot"></i>
                        </div>
                        <div class="floating-icon icon-3 bg-warning">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="floating-icon icon-4 bg-info">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        
                        <!-- Central Orb -->
                        <div class="central-orb">
                            <div class="orb-inner"></div>
                            <div class="orb-glow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Breadcrumb Navigation -->
        <div class="hero-breadcrumb" data-aos="fade-up" data-aos-delay="800">
            <div class="container">
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('/') }}" class="text-light"><i class="fas fa-home me-2"></i>Home</a></li>
                        <li class="current text-warning">Services</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator" data-aos="fade-up" data-aos-delay="900">
            <div class="scroll-text text-light">Scroll to Explore</div>
            <div class="scroll-arrow">
                <div class="arrow-line"></div>
            </div>
        </div>
    </section>

    <!-- Services Section - Modern Grid Layout -->
<!-- Services Section - Modern Grid Layout -->
<section id="services" class="cel-services-modern-grid section bg-light">
    <div class="container">
        <!-- Section Header -->
        <div class="row justify-content-center text-center cel-mb-6">
            <div class="col-lg-10">
                <div class="cel-section-pre-title" data-aos="fade-up">
                    <span class="cel-badge cel-bg-primary-soft text-primary rounded-pill px-4 py-2 cel-mb-3">
                        <i class="fas fa-rocket me-2"></i>Our Expertise
                    </span>
                </div>
                <h2 class="display-5 fw-bold text-dark cel-mb-4" data-aos="fade-up" data-aos-delay="50">
                    Transform Your Business with 
                    <span class="cel-text-gradient-primary">Digital Excellence</span>
                </h2>
                <p class="lead text-muted cel-mb-0" data-aos="fade-up" data-aos-delay="100">
                    Comprehensive technology solutions designed to streamline operations, drive growth, 
                    and secure your competitive edge in the digital landscape.
                </p>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="cel-services-grid">
            <!-- Row 1: 2 large cards -->
            <div class="row g-4 cel-mb-4">
                <!-- Business Management Systems -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="150">
                    <div class="cel-service-card-large cel-bg-primary text-white">
                        <div class="cel-card-content">
                            <div class="cel-icon-wrapper cel-mb-4">
                                <i class="fas fa-briefcase fa-3x"></i>
                            </div>
                            <h3 class="h2 fw-bold cel-mb-3">Business Management Systems</h3>
                            <p class="cel-mb-4 cel-opacity-90">Integrated ERP and CRM platforms that become the central nervous system of your company operations.</p>
                            <div class="cel-features-list cel-mb-4">
                                <div class="cel-feature-item">
                                    <i class="fas fa-check-circle me-2"></i>
                                    Real-time Analytics & Reporting
                                </div>
                                <div class="cel-feature-item">
                                    <i class="fas fa-check-circle me-2"></i>
                                    Multi-department Integration
                                </div>
                                <div class="cel-feature-item">
                                    <i class="fas fa-check-circle me-2"></i>
                                    Automated Workflow Processes
                                </div>
                            </div>
                        </div>
                        <div class="cel-card-decoration">
                            <div class="cel-decoration-circle"></div>
                        </div>
                    </div>
                </div>

                <!-- Business Automation -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                    <div class="cel-service-card-large cel-bg-success text-white">
                        <div class="cel-card-content">
                            <div class="cel-icon-wrapper cel-mb-4">
                                <i class="fas fa-robot fa-3x"></i>
                            </div>
                            <h3 class="h2 fw-bold cel-mb-3">Business Automation</h3>
                            <p class="cel-mb-4 cel-opacity-90">Transform repetitive manual tasks into intelligent automated workflows that boost efficiency and reduce costs.</p>
                            <div class="cel-features-list cel-mb-4">
                                <div class="cel-feature-item">
                                    <i class="fas fa-check-circle me-2"></i>
                                    AI-Powered Process Automation
                                </div>
                                <div class="cel-feature-item">
                                    <i class="fas fa-check-circle me-2"></i>
                                    24/7 Automated Operations
                                </div>
                                <div class="cel-feature-item">
                                    <i class="fas fa-check-circle me-2"></i>
                                    Custom Workflow Design
                                </div>
                            </div>
                        </div>
                        <div class="cel-card-decoration">
                            <div class="cel-decoration-circle"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2: 4 medium cards -->
            <div class="row g-4 cel-mb-4">
                <!-- Software Development -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="cel-service-card-medium bg-white">
                        <div class="cel-card-header">
                            <div class="cel-icon-wrapper cel-bg-warning">
                                <i class="fas fa-code fa-2x text-white"></i>
                            </div>
                            <h4 class="fw-bold text-dark cel-mb-2">Software Development</h4>
                        </div>
                        <div class="cel-card-body">
                            <p class="text-muted cel-mb-3">Custom-built applications that solve your unique challenges and scale with your business growth.</p>
                            <ul class="cel-feature-dots">
                                <li>Custom Solutions</li>
                                <li>Scalable Architecture</li>
                                <li>Agile Methodology</li>
                            </ul>
                        </div>
                        <div class="cel-card-footer">
                            <a href="#" class="btn cel-btn-warning btn-sm w-100">
                                Develop <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Web & Mobile Apps -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="cel-service-card-medium bg-white">
                        <div class="cel-card-header">
                            <div class="cel-icon-wrapper cel-bg-info">
                                <i class="fas fa-mobile-alt fa-2x text-white"></i>
                            </div>
                            <h4 class="fw-bold text-dark cel-mb-2">Web & Mobile Apps</h4>
                        </div>
                        <div class="cel-card-body">
                            <p class="text-muted cel-mb-3">Stunning digital experiences that engage customers and drive conversions across all devices.</p>
                            <ul class="cel-feature-dots">
                                <li>Responsive Design</li>
                                <li>Native Performance</li>
                                <li>Cross-Platform</li>
                            </ul>
                        </div>
                        <div class="cel-card-footer">
                            <a href="#" class="btn cel-btn-info btn-sm w-100">
                                Create <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- AI Integration -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="cel-service-card-medium bg-white">
                        <div class="cel-card-header">
                            <div class="cel-icon-wrapper cel-bg-danger">
                                <i class="fas fa-brain fa-2x text-white"></i>
                            </div>
                            <h4 class="fw-bold text-dark cel-mb-2">AI Integration</h4>
                        </div>
                        <div class="cel-card-body">
                            <p class="text-muted cel-mb-3">Leverage artificial intelligence to predict trends, automate decisions, and gain competitive insights.</p>
                            <ul class="cel-feature-dots">
                                <li>Machine Learning</li>
                                <li>Predictive Analytics</li>
                                <li>Smart Automation</li>
                            </ul>
                        </div>
                        <div class="cel-card-footer">
                            <a href="#" class="btn cel-btn-danger btn-sm w-100">
                                Innovate <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- IT Consultancy -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="350">
                    <div class="cel-service-card-medium bg-white">
                        <div class="cel-card-header">
                            <div class="cel-icon-wrapper cel-bg-purple">
                                <i class="fas fa-chart-line fa-2x text-white"></i>
                            </div>
                            <h4 class="fw-bold text-dark cel-mb-2">IT Consultancy</h4>
                        </div>
                        <div class="cel-card-body">
                            <p class="text-muted cel-mb-3">Strategic guidance to align your technology investments with long-term business goals.</p>
                            <ul class="cel-feature-dots">
                                <li>Digital Strategy</li>
                                <li>Tech Roadmap</li>
                                <li>Implementation</li>
                            </ul>
                        </div>
                        <div class="cel-card-footer">
                            <a href="#" class="btn cel-btn-purple btn-sm w-100">
                                Consult <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Services Section - Modern Grid Layout */
.cel-services-modern-grid {
    padding: 80px 0;
    position: relative;
    background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
}

/* Text Gradients */
.cel-text-gradient-primary {
    background: linear-gradient(135deg, #0c1e3e 0%, #1a3b6b 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Section Pre-title */
.cel-section-pre-title .cel-badge {
    font-size: 0.9rem;
    font-weight: 600;
}

.cel-bg-primary-soft {
    background-color: rgba(12, 30, 62, 0.1) !important;
}

/* Spacing utilities */
.cel-mb-6 { margin-bottom: 3rem !important; }
.cel-mb-4 { margin-bottom: 1.5rem !important; }
.cel-mb-3 { margin-bottom: 1rem !important; }
.cel-mb-2 { margin-bottom: 0.5rem !important; }
.cel-mb-0 { margin-bottom: 0 !important; }

/* Opacity */
.cel-opacity-90 { opacity: 0.9; }

/* Custom Background Colors */
.cel-bg-primary { background: linear-gradient(135deg, #0c1e3e 0%, #1a3b6b 100%) !important; }
.cel-bg-success { background: linear-gradient(135deg, #198754 0%, #157347 100%) !important; }
.cel-bg-warning { background: linear-gradient(135deg, #ffc107 0%, #ffca2c 100%) !important; }
.cel-bg-info { background: linear-gradient(135deg, #0dcaf0 0%, #31d2f2 100%) !important; }
.cel-bg-danger { background: linear-gradient(135deg, #dc3545 0%, #bb2d3b 100%) !important; }
.cel-bg-purple { background: linear-gradient(135deg, #6f42c1 0%, #5a32a8 100%) !important; }

/* Custom Button Colors */
.cel-btn-warning { background: #ffc107; border-color: #ffc107; color: #000; }
.cel-btn-info { background: #0dcaf0; border-color: #0dcaf0; color: #000; }
.cel-btn-danger { background: #dc3545; border-color: #dc3545; color: #fff; }
.cel-btn-purple { background: #6f42c1; border-color: #6f42c1; color: #fff; }

.cel-btn-warning:hover { background: #ffca2c; border-color: #ffca2c; color: #000; }
.cel-btn-info:hover { background: #31d2f2; border-color: #31d2f2; color: #000; }
.cel-btn-danger:hover { background: #bb2d3b; border-color: #bb2d3b; color: #fff; }
.cel-btn-purple:hover { background: #5a32a8; border-color: #5a32a8; color: #fff; }

/* Service Cards - Large */
.cel-service-card-large {
    border-radius: 20px;
    padding: 2.5rem;
    position: relative;
    overflow: hidden;
    height: 100%;
    min-height: 400px;
    display: flex;
    align-items: center;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.cel-service-card-large:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.cel-service-card-large .cel-card-content {
    position: relative;
    z-index: 2;
    width: 100%;
}

.cel-service-card-large .cel-icon-wrapper {
    opacity: 0.9;
    margin-bottom: 1.5rem;
}

.cel-service-card-large h3 {
    font-size: 1.8rem;
    line-height: 1.2;
    margin-bottom: 1rem;
}

.cel-service-card-large p {
    font-size: 1.05rem;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

/* Features List for Large Cards */
.cel-features-list {
    margin: 1.5rem 0;
}

.cel-feature-item {
    display: flex;
    align-items: center;
    padding: 0.75rem 0;
    font-size: 1rem;
    font-weight: 500;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    color: white;
}

.cel-feature-item:last-child {
    border-bottom: none;
}

.cel-feature-item i {
    opacity: 0.9;
    font-size: 1.1rem;
    margin-right: 0.5rem;
}

/* Card Decoration */
.cel-card-decoration {
    position: absolute;
    top: -40px;
    right: -40px;
    width: 150px;
    height: 150px;
    opacity: 0.1;
}

.cel-decoration-circle {
    width: 100%;
    height: 100%;
    border: 3px solid currentColor;
    border-radius: 50%;
}

/* Service Cards - Medium */
.cel-service-card-medium {
    border-radius: 16px;
    padding: 2rem 1.5rem;
    height: 100%;
    min-height: 320px;
    display: flex;
    flex-direction: column;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    border: 1px solid #f1f5f9;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.cel-service-card-medium:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    border-color: #e2e8f0;
}

.cel-service-card-medium .cel-card-header {
    text-align: center;
    margin-bottom: 1.5rem;
}

.cel-service-card-medium .cel-icon-wrapper {
    width: 70px;
    height: 70px;
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.cel-service-card-medium h4 {
    font-size: 1.2rem;
    line-height: 1.3;
    margin-bottom: 1rem;
}

.cel-service-card-medium .cel-card-body {
    flex: 1;
    margin-bottom: 1.5rem;
}

.cel-service-card-medium .cel-card-body p {
    font-size: 0.92rem;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

/* Feature Dots for Medium Cards */
.cel-feature-dots {
    list-style: none;
    padding: 0;
    margin: 0;
}

.cel-feature-dots li {
    position: relative;
    padding: 0.4rem 0;
    padding-left: 1.5rem;
    font-size: 0.88rem;
    color: #64748b;
    font-weight: 500;
}

.cel-feature-dots li:before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: currentColor;
    opacity: 0.7;
}

/* Color-specific dots for each service card */
.cel-service-card-medium:nth-child(1) .cel-feature-dots li:before { 
    color: #ffc107; 
    background: #ffc107;
}

.cel-service-card-medium:nth-child(2) .cel-feature-dots li:before { 
    color: #0dcaf0; 
    background: #0dcaf0;
}

.cel-service-card-medium:nth-child(3) .cel-feature-dots li:before { 
    color: #dc3545; 
    background: #dc3545;
}

.cel-service-card-medium:nth-child(4) .cel-feature-dots li:before { 
    color: #6f42c1; 
    background: #6f42c1;
}

.cel-service-card-medium .cel-card-footer {
    margin-top: auto;
}

/* Responsive Design */
@media (max-width: 768px) {
    .cel-services-modern-grid {
        padding: 60px 0;
    }
    
    .cel-service-card-large {
        padding: 2rem 1.5rem;
        min-height: 350px;
        margin-bottom: 1.5rem;
    }
    
    .cel-service-card-large h3 {
        font-size: 1.5rem;
    }
    
    .cel-service-card-medium {
        min-height: 280px;
        padding: 1.5rem 1rem;
        margin-bottom: 1rem;
    }
    
    .cel-service-card-medium .cel-icon-wrapper {
        width: 60px;
        height: 60px;
        margin-bottom: 1rem;
    }
    
    .cel-service-card-medium .cel-icon-wrapper i {
        font-size: 1.5rem !important;
    }
    
    .cel-feature-item {
        font-size: 0.95rem;
        padding: 0.5rem 0;
    }
}

@media (max-width: 576px) {
    .cel-service-card-large {
        min-height: 320px;
        padding: 1.5rem 1rem;
    }
    
    .cel-service-card-large h3 {
        font-size: 1.3rem;
    }
    
    .cel-service-card-medium {
        min-height: 260px;
    }
    
    .cel-feature-dots li {
        font-size: 0.85rem;
        padding-left: 1.25rem;
    }
    
    .display-5 {
        font-size: 2rem !important;
    }
}

/* Animation Enhancements */
[data-aos] {
    transition-duration: 0.8s;
}

.cel-service-card-large[data-aos],
.cel-service-card-medium[data-aos] {
    transition-duration: 1s;
}
</style>
    <!-- Featured Solutions Section - Modern Design -->
    <section id="featured-solutions" class="featured-solutions section bg-white">
        <div class="container">
            <!-- Section Header -->
            <div class="row justify-content-center text-center mb-6">
                <div class="col-lg-8">
                    <span class="section-badge bg-primary-soft text-primary rounded-pill px-4 py-2 mb-3 d-inline-block">
                        <i class="fas fa-star me-2"></i>Specialized Solutions
                    </span>
                    <h2 class="display-5 fw-bold text-dark mb-4">Featured <span class="text-primary">Business Solutions</span></h2>
                    <p class="lead text-muted">Tailored solutions designed to address specific business challenges and drive measurable results.</p>
                </div>
            </div>

            <!-- Solutions Grid -->
            <div class="solutions-grid">
                <!-- Technical Training -->
                <div class="solution-card-wrapper" data-aos="fade-up" data-aos-delay="100">
                    <div class="solution-card">
                        <div class="solution-image">
                            <img src="assets/img/consult2.jpg" alt="Technical Training" class="solution-img">
                            <div class="solution-overlay bg-primary-gradient"></div>
                            <div class="solution-badge bg-primary">
                                <i class="fas fa-graduation-cap me-2"></i>Training
                            </div>
                            <div class="solution-actions">
                                <button class="btn-action btn-view" data-bs-toggle="tooltip" title="Quick View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-action btn-share" data-bs-toggle="tooltip" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="solution-content">
                            <h3 class="solution-title fw-bold text-dark mb-3">Technical Training Programs</h3>
                            <p class="solution-description text-muted mb-4">
                                Maximize your software investment with our tailored technical training programs. We equip your team with deep, 
                                practical knowledge to master new systems, boost productivity, and drive innovation.
                            </p>
                            <div class="solution-features mb-4">
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <span>Expert-Led Sessions</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <span>Hands-on Practice</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <span>Custom Curriculum</span>
                                </div>
                            </div>
                            <div class="solution-stats">
                                <div class="stat">
                                    <div class="stat-number text-primary fw-bold">45%</div>
                                    <div class="stat-label text-muted">Productivity Boost</div>
                                </div>
                                <div class="stat">
                                    <div class="stat-number text-success fw-bold">2x</div>
                                    <div class="stat-label text-muted">Faster Adoption</div>
                                </div>
                            </div>
                            <div class="solution-actions mt-4">
                                <a href="#" class="btn btn-primary me-2">
                                    <i class="fas fa-book-open me-2"></i>View Programs
                                </a>
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-calendar me-2"></i>Schedule Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- POS System -->
                <div class="solution-card-wrapper" data-aos="fade-up" data-aos-delay="200">
                    <div class="solution-card">
                        <div class="solution-image">
                            <img src="assets/img/t2-bg.jpg" alt="Point of Sale System" class="solution-img">
                            <div class="solution-overlay bg-success-gradient"></div>
                            <div class="solution-badge bg-success">
                                <i class="fas fa-cash-register me-2"></i>Retail
                            </div>
                            <div class="solution-actions">
                                <button class="btn-action btn-view" data-bs-toggle="tooltip" title="Quick View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-action btn-share" data-bs-toggle="tooltip" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="solution-content">
                            <h3 class="solution-title fw-bold text-dark mb-3">Point of Sale System</h3>
                            <p class="solution-description text-muted mb-4">
                                Streamline your sales and manage your business from a single, powerful platform. Our POS system simplifies transactions, 
                                tracks inventory in real-time, and delivers insightful sales reports.
                            </p>
                            <div class="solution-features mb-4">
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <span>Real-time Inventory</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <span>Sales Analytics</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <span>Multi-location Sync</span>
                                </div>
                            </div>
                            <div class="solution-stats">
                                <div class="stat">
                                    <div class="stat-number text-success fw-bold">30%</div>
                                    <div class="stat-label text-muted">Sales Increase</div>
                                </div>
                                <div class="stat">
                                    <div class="stat-number text-primary fw-bold">50%</div>
                                    <div class="stat-label text-muted">Time Saved</div>
                                </div>
                            </div>
                            <div class="solution-actions mt-4">
                                <a href="#" class="btn btn-success me-2">
                                    <i class="fas fa-shopping-cart me-2"></i>Get Started
                                </a>
                                <a href="#" class="btn btn-outline-success">
                                    <i class="fas fa-chart-line me-2"></i>View Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Networking & Maintenance -->
                <div class="solution-card-wrapper" data-aos="fade-up" data-aos-delay="300">
                    <div class="solution-card">
                        <div class="solution-image">
                            <img src="assets/img/networking1.jpg" alt="Networking and Maintenance" class="solution-img">
                            <div class="solution-overlay bg-info-gradient"></div>
                            <div class="solution-badge bg-info">
                                <i class="fas fa-network-wired me-2"></i>Infrastructure
                            </div>
                            <div class="solution-actions">
                                <button class="btn-action btn-view" data-bs-toggle="tooltip" title="Quick View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-action btn-share" data-bs-toggle="tooltip" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="solution-content">
                            <h3 class="solution-title fw-bold text-dark mb-3">Networking & Maintenance</h3>
                            <p class="solution-description text-muted mb-4">
                                Ensure your business operations run seamlessly with our reliable networking and maintenance services. 
                                We provide robust infrastructure solutions and proactive support to keep your systems secure and performing.
                            </p>
                            <div class="solution-features mb-4">
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <span>24/7 Monitoring</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <span>Proactive Maintenance</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <span>Security First</span>
                                </div>
                            </div>
                            <div class="solution-stats">
                                <div class="stat">
                                    <div class="stat-number text-info fw-bold">99.9%</div>
                                    <div class="stat-label text-muted">Uptime Guarantee</div>
                                </div>
                                <div class="stat">
                                    <div class="stat-number text-success fw-bold">60%</div>
                                    <div class="stat-label text-muted">Faster Response</div>
                                </div>
                            </div>
                            <div class="solution-actions mt-4">
                                <a href="#" class="btn btn-info me-2">
                                    <i class="fas fa-shield-alt me-2"></i>Secure Now
                                </a>
                                <a href="#" class="btn btn-outline-info">
                                    <i class="fas fa-headset me-2"></i>Get Support
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- E-Business -->
                <div class="solution-card-wrapper" data-aos="fade-up" data-aos-delay="400">
                    <div class="solution-card">
                        <div class="solution-image">
                            <img src="assets/img/erp.jpg" alt="E-Business Solutions" class="solution-img">
                            <div class="solution-overlay bg-warning-gradient"></div>
                            <div class="solution-badge bg-warning">
                                <i class="fas fa-store me-2"></i>Digital
                            </div>
                            <div class="solution-actions">
                                <button class="btn-action btn-view" data-bs-toggle="tooltip" title="Quick View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-action btn-share" data-bs-toggle="tooltip" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="solution-content">
                            <h3 class="solution-title fw-bold text-dark mb-3">E-Business Solutions</h3>
                            <p class="solution-description text-muted mb-4">
                                Transform your business for the digital age. We build integrated online platforms that streamline your operations, 
                                from e-commerce and customer management to digital marketing and online payments.
                            </p>
                            <div class="solution-features mb-4">
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <span>E-commerce Ready</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <span>Payment Integration</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <span>Marketing Tools</span>
                                </div>
                            </div>
                            <div class="solution-stats">
                                <div class="stat">
                                    <div class="stat-number text-warning fw-bold">3x</div>
                                    <div class="stat-label text-muted">Market Reach</div>
                                </div>
                                <div class="stat">
                                    <div class="stat-number text-success fw-bold">24/7</div>
                                    <div class="stat-label ">Business Hours</div>
                                </div>
                            </div>
                            <div class="solution-actions mt-4">
                                <a href="#" class="btn btn-warning me-2">
                                    <i class="fas fa-globe me-2"></i>Go Digital
                                </a>
                                <a href="#" class="btn btn-outline-warning">
                                    <i class="fas fa-rocket me-2"></i>Launch Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="row mt-6">
                <div class="col-12">
                    <div class="solutions-cta bg-primary text-white rounded-4 p-5 text-center">
                        <h3 class="h2 fw-bold mb-3">Need a Custom Solution?</h3>
                        <p class="lead mb-4 opacity-90">Let's discuss your specific business needs and create a tailored solution that drives your success.</p>
                        <div class="cta-actions">
                            <a href="{{ route('contact.show') }}" class="btn btn-warning btn-lg px-5 py-3 me-3 fw-bold">
                                <i class="fas fa-comments me-2"></i>Consult Our Experts
                            </a>
                            <a href="tel:+260973899909" class="btn btn-outline-light btn-lg px-5 py-3">
                                <i class="fas fa-phone me-2"></i>Call Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
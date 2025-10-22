@extends('layouts.main')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <!-- Floating elements for background animation -->
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('cel-assets/img/hero-carousel/solar.jpg')}}" alt="Business Growth">
                <div class="carousel-container">
                    <h1><span class="highlight">Elevate Your Business</span> to New Heights</h1>
                    <p>We provide innovative solutions to drive your business growth and maximize your digital potential.</p>
                    <div class="btn-container">
                        <a href="{{ route('services') }}" class="btn-get-started">Get Started</a>
                        <a href="#" class="btn-watch-video">
                            <i class="fas fa-play-circle"></i>Watch Video
                        </a>
                    </div>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{asset('cel-assets/img/hero-carousel/rocket.jpg')}}" alt="Business Automation">
                <div class="carousel-container">
                    <h2><span class="highlight">Automate Your Ambition</span></h2>
                    <p>Stop being busy; start being productive. We specialize in business automation and IT strategy that cuts costs, eliminates errors, and scales your operations, turning your business goals into automated realities.</p>
                    <div class="btn-container">
                        <a href="#featured-services" class="btn-get-started">Get Started</a>
                        <a href="#" class="btn-watch-video">
                            <i class="fas fa-play-circle"></i>Watch Video
                        </a>
                    </div>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{asset('cel-assets/img/hero-carousel/remote.jpg')}}" alt="IT Strategy">
                <div class="carousel-container">
                    <h2>Strategic IT for <span class="highlight">Streamlined Operations</span></h2>
                    <p>Leverage expert IT consultancy to map your business processes. We then design and implement precise automation solutions that enhance efficiency, ensure accuracy, and provide a clear competitive advantage.</p>
                    <div class="btn-container">
                        <a href="#featured-services" class="btn-get-started">Get Started</a>
                        <a href="#" class="btn-watch-video">
                            <i class="fas fa-play-circle"></i>Watch Video
                        </a>
                    </div>
                </div>
            </div><!-- End Carousel Item -->
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        {{-- <ol class="carousel-indicators">
            <li data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#hero-carousel" data-bs-slide-to="2"></li>
        </ol> --}}

      </div>

    </section><!-- /Hero Section -->

     <!-- About Section -->
    <section id="about" class="about section modern-about">

      <!-- Section Header -->
      <div class="container" data-aos="fade-up">
        <div class="section-header text-center">
          <span class="section-badge">About Us</span>
          <h2 class="section-title">Building Digital Foundations for Business Success</h2>
          <p class="section-subtitle">We transform complex business challenges into elegant technological solutions</p>
        </div>
      </div>

      <div class="container">

        <!-- Main Content -->
        <div class="row align-items-center gy-5">

          <!-- Left Column - Visual & Stats -->
          <div class="col-lg-5" data-aos="fade-right">
            <div class="about-visual">
              <div class="floating-card card-1">
                <i class="bi bi-shield-check"></i>
                <span>Secure Solutions</span>
              </div>
              <div class="floating-card card-2">
                <i class="bi bi-lightning"></i>
                <span>Fast Delivery</span>
              </div>
              <div class="floating-card card-3">
                <i class="bi bi-graph-up"></i>
                <span>Proven Results</span>
              </div>
              <div class="main-visual">
                <div class="visual-content">
                  <h4>5+ Years</h4>
                  <p>Of Digital Excellence</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Column - Content -->
          <div class="col-lg-7" data-aos="fade-left">
            <div class="about-content-modern">
              
              <!-- Mission Statement -->
              <div class="mission-box">
                <h3>Your Technology Partner for Growth</h3>
                <p>Cyber Express combines technical expertise with business insight to deliver software solutions that drive efficiency, innovation, and competitive advantage.</p>
              </div>

              <!-- Value Propositions -->
              <div class="value-grid">
                <div class="value-item">
                  <div class="value-icon">
                    <div class="icon-wrapper">
                      <i class="bi bi-building"></i>
                    </div>
                  </div>
                  <div class="value-content">
                    <h5>Corporate Ecosystem</h5>
                    <p>Leading a diverse portfolio of technology-driven subsidiaries including Buntu Taxi Limited</p>
                  </div>
                </div>

                <div class="value-item">
                  <div class="value-icon">
                    <div class="icon-wrapper">
                      <i class="bi bi-code-slash"></i>
                    </div>
                  </div>
                  <div class="value-content">
                    <h5>Full-Cycle Development</h5>
                    <p>End-to-end custom software solutions from concept to deployment and beyond</p>
                  </div>
                </div>

                <div class="value-item">
                  <div class="value-icon">
                    <div class="icon-wrapper">
                      <i class="bi bi-gear-fill"></i>
                    </div>
                  </div>
                  <div class="value-content">
                    <h5>Business Automation</h5>
                    <p>Streamlining operations through intelligent software systems and workflows</p>
                  </div>
                </div>
              </div>

              <!-- Stats Bar -->
              <div class="stats-bar">
                <div class="stat">
                  <span class="stat-number" data-count="150">80</span>
                  <span class="stat-label">Projects Completed</span>
                </div>
                <div class="stat">
                  <span class="stat-number" data-count="50">13</span>
                  <span class="stat-label">Active Clients</span>
                </div>
                <div class="stat">
                  <span class="stat-number" data-count="98">98</span>
                  <span class="stat-label">Success Rate</span>
                </div>
              </div>

              <!-- CTA -->
              <div class="cta-group">
                <a href="{{ route('about') }}" class="btn-primary">
                  <span>Discover Our Story</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
                {{-- <a href="#contact" class="btn-secondary">
                  <span>Start Project</span>
                  <i class="bi bi-chat-dots"></i>
                </a> --}}
              </div>

            </div>
          </div>

        </div>

        <!-- Trust Indicators -->
        {{-- <div class="trust-section" data-aos="fade-up" data-aos-delay="200">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="trust-grid">
                <div class="trust-item">
                  <i class="bi bi-award"></i>
                  <h6>Quality Assured</h6>
                  <p>Rigorous testing standards</p>
                </div>
                <div class="trust-item">
                  <i class="bi bi-clock"></i>
                  <h6>On-Time Delivery</h6>
                  <p>95% project completion rate</p>
                </div>
                <div class="trust-item">
                  <i class="bi bi-headset"></i>
                  <h6>24/7 Support</h6>
                  <p>Always here to help</p>
                </div>
                <div class="trust-item">
                  <i class="bi bi-shield-check"></i>
                  <h6>Secure & Reliable</h6>
                  <p>Enterprise-grade security</p>
                </div>
              </div>
            </div>
          </div>
        </div> --}}

      </div>
    </section><!-- /About Section -->


    <!-- Clients Section -->
    <section id="clients" class="clients section modern-clients">

      <div class="container">

        <!-- Section Header -->
        <div class="section-header text-center" data-aos="fade-up">
          <span class="section-badge">TRUSTED BY</span>
          <h2 class="section-title">Leading Zambian Businesses</h2>
          <p class="section-subtitle">We're proud to partner with innovative companies across Zambia</p>
        </div>

        <!-- Clients Logos -->
        <div class="clients-container" data-aos="fade-up" data-aos-delay="100">
          <div class="clients-track">
            {{-- Check if there are clients --}}
            @if($clients->count())
              {{-- First loop for seamless animation --}}
              @foreach($clients as $client)
              <div class="client-logo-item">
                <div class="logo-wrapper">
                  <img src="{{ asset('storage/' . $client->logo) }}" class="client-logo" alt="{{ $client->name ?? 'Client Logo' }}" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYwIiBoZWlnaHQ9IjgwIiB2aWV3Qm94PSIwIDAgMTYwIDgwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cmVjdCB3aWR0aD0iMTYwIiBoZWlnaHQ9IjgwIiByeD0iOCIgZmlsbD0iI2YxZjVmOSIvPgo8cGF0aCBkPSJNNjAgNDBDNjAgMzIgNjggMzIgNzIgMzJDODAgMzIgODAgNDAgNzYgNDBDNzIgNDAgNjggNDggNjAgNDhaTTg4IDQwQzg4IDMyIDk2IDMyIDEwMCAzMkMxMDggMzIgMTA4IDQwIDEwNCA0MEMxMDAgNDAgOTYgNDggODggNDhaIiBmaWxsPSIjNDM2MWVlIiBmaWxsLW9wYWNpdHk9IjAuMiIvPgo8L3N2Zz4K'">
                  {{-- <div class="logo-overlay">
                    <span>View Case Study</span>
                  </div> --}}
                </div>
              </div>
              @endforeach
              {{-- Duplicate for seamless loop --}}
              @foreach($clients as $client)
              <div class="client-logo-item">
                <div class="logo-wrapper">
                  <img src="{{ asset('storage/' . $client->logo) }}" class="client-logo" alt="{{ $client->name ?? 'Client Logo' }}" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYwIiBoZWlnaHQ9IjgwIiB2aWV3Qm94PSIwIDAgMTYwIDgwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cmVjdCB3aWR0aD0iMTYwIiBoZWlnaHQ9IjgwIiByeD0iOCIgZmlsbD0iI2YxZjVmOSIvPgo8cGF0aCBkPSJNNjAgNDBDNjAgMzIgNjggMzIgNzIgMzJDODAgMzIgODAgNDAgNzYgNDBDNzIgNDAgNjggNDggNjAgNDhaTTg4IDQwQzg4IDMyIDk2IDMyIDEwMCAzMkMxMDggMzIgMTA4IDQwIDEwNCA0MEMxMDAgNDAgOTYgNDggODggNDhaIiBmaWxsPSIjNDM2MWVlIiBmaWxsLW9wYWNpdHk9IjAuMiIvPgo8L3N2Zz4K'">
                  {{-- <div class="logo-overlay">
                    <span>View Case Study</span>
                  </div> --}}
                </div>
              </div>
              @endforeach
            @else
              <div class="no-clients">
                <i class="bi bi-building"></i>
                <p>No clients found</p>
              </div>
            @endif
          </div>
        </div>

        <!-- CTA -->
        <div class="clients-cta text-center" data-aos="fade-up" data-aos-delay="300">
          <p class="cta-text">Ready to join our growing list of successful partners?</p>
          <a href="{{ route('contact.show') }}" class="btn-primary">
            <span>Become a Client</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <div class="container">

        <!-- Section Header -->
        <div class="section-header text-center" data-aos="fade-up">
          {{-- <span class="section-badge">TESTIMONIALS</span> --}}
          <h2 class="section-title">What Our Clients Say</h2>
          <p class="section-subtitle">Hear directly from business leaders across Zambia about their experience working with us</p>
        </div>

        <!-- Testimonials Grid -->
        <div class="testimonials-grid" data-aos="fade-up" data-aos-delay="100">
          
          <!-- Testimonial 1 -->
          <div class="testimonial-card">
            <div class="testimonial-header">
              <div class="client-avatar">
                <img src="{{asset('cel-assets/img/testimonials/client1.jpg')}}" alt="Chanda Mwape" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iMzAiIGN5PSIzMCIgcj0iMzAiIGZpbGw9IiM0MzYxZWUiIGZpbGwtb3BhY2l0eT0iMC4xIi8+CjxwYXRoIGQ9Ik0zMCAzM00yNSAyNUMzMCAyMCAzNSAyMCA0MCAyNU0zMCAzOFY0OE0zMCAzOEMyOCAzNiAyNiAzNCAyNCAzNE0zMCAzOEMzMiAzNiAzNCAzNCAzNiAzNCIgc3Ryb2tlPSIjNDM2MWVlIiBzdHJva2Utd2lkdGg9IjIiLz4KPC9zdmc+'">
              </div>
              <div class="client-info">
                <h5>Chanda Mwape</h5>
                <p>Operations Director, Lusaka Retail Group</p>
              </div>
              <div class="quote-icon">
                <i class="bi bi-quote"></i>
              </div>
            </div>
            <div class="testimonial-content">
              <p>"Cyber Express transformed our inventory management system completely. What used to take days now happens in hours. Their team understood our unique Zambian market challenges and delivered a solution that actually works for our context."</p>
            </div>
            <div class="testimonial-rating">
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="industry-tag">Retail Industry</span>
            </div>
          </div>

          <!-- Testimonial 2 -->
          <div class="testimonial-card">
            <div class="testimonial-header">
              <div class="client-avatar">
                <img src="{{asset('cel-assets/img/testimonials/client2.jpg')}}" alt="Sarah Banda" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iMzAiIGN5PSIzMCIgcj0iMzAiIGZpbGw9IiM0MzYxZWUiIGZpbGwtb3BhY2l0eT0iMC4xIi8+CjxwYXRoIGQ9Ik0zMCAzM00yNSAyNUMzMCAyMCAzNSAyMCA0MCAyNU0zMCAzOFY0OE0zMCAzOEMyOCAzNiAyNiAzNCAyNCAzNE0zMCAzOEMzMiAzNiAzNCAzNCAzNiAzNCIgc3Ryb2tlPSIjNDM2MWVlIiBzdHJva2Utd2lkdGg9IjIiLz4KPC9zdmc+'">
              </div>
              <div class="client-info">
                <h5>Sarah Banda</h5>
                <p>CEO, Copperbelt Logistics</p>
              </div>
              <div class="quote-icon">
                <i class="bi bi-quote"></i>
              </div>
            </div>
            <div class="testimonial-content">
              <p>"The custom logistics software developed by Cyber Express has revolutionized our operations across Zambia. Real-time tracking, automated scheduling, and seamless integration with our partners - everything just works perfectly."</p>
            </div>
            <div class="testimonial-rating">
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
              </div>
              <span class="industry-tag">Logistics</span>
            </div>
          </div>

      <!-- Testimonial 3 - Swiss Guard -->
          <div class="testimonial-card">
            <div class="testimonial-header">
              <div class="client-avatar">
                <img src="{{asset('cel-assets/img/testimonials/swiss-guard.jpg')}}" alt="Swiss Guard Management" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iMzAiIGN5PSIzMCIgcj0iMzAiIGZpbGw9IiM0MzYxZWUiIGZpbGwtb3BhY2l0eT0iMC4xIi8+CjxwYXRoIGQ9Ik0zMCAzM00yNSAyNUMzMCAyMCAzNSAyMCA0MCAyNU0zMCAzOFY0OE0zMCAzOEMyOCAzNiAyNiAzNCAyNCAzNE0zMCAzOEMzMiAzNiAzNCAzNCAzNiAzNCIgc3Ryb2tlPSIjNDM2MWVlIiBzdHJva2Utd2lkdGg9IjIiLz4KPC9zdmc+'">
              </div>
              <div class="client-info">
                <h5>Swiss Guard Team</h5>
                <p>Leading Security Services Provider</p>
              </div>
              <div class="quote-icon">
                <i class="bi bi-quote"></i>
              </div>
            </div>
            <div class="testimonial-content">
              <p>"Cyber Express delivered an exceptional corporate website that perfectly captures our brand's professionalism and reliability in the security industry. The website has significantly improved our online presence and client engagement. Their attention to detail and understanding of our business needs was impressive throughout the development process."</p>
            </div>
            <div class="testimonial-rating">
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="industry-tag">Security Services</span>
            </div>
          </div>
        </div>

        </div>

        <!-- Stats Bar -->
        <div class="testimonial-stats" data-aos="fade-up" data-aos-delay="200">
          <div class="stats-row">
            <div class="stat-item">
              <span class="stat-number">4.9/5</span>
              <span class="stat-label">Average Rating</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">100+</span>
              <span class="stat-label">Happy Clients</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">95%</span>
              <span class="stat-label">Retention Rate</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">24/7</span>
              <span class="stat-label">Support Available</span>
            </div>
          </div>
        </div>

        <!-- CTA Section -->
        <div class="testimonial-cta text-center" data-aos="fade-up" data-aos-delay="300">
          <h3>Ready to Transform Your Business?</h3>
          <p>Join the growing list of Zambian businesses that trust Cyber Express with their digital transformation</p>
          <div class="cta-buttons">
            <a href="{{ route('services') }}" class="btn-primary">
              <span>Start Your Project</span>
              <i class="bi bi-arrow-right"></i>
            </a>
            <a href="{{ route('cel2.portfolio') }}" class="btn-secondary">
              <span>View Case Studies</span>
              <i class="bi bi-folder2-open"></i>
            </a>
          </div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

@endsection
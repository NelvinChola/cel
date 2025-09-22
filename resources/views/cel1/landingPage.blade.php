@extends('layouts.main')

@section('content')


    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="{{asset('cel-assets/img/hero-carousel/busines2.jpg')}}" alt="">
          <div class="carousel-container">
            <h1>Elevate Your Business to New Heights<br></h1>
            <p>We provide innovative solutions to drive your business growth and maximize your digital potential.</p>
                    <div class="btn-container">
                    <a href="#featured-services" class="btn-get-started">Get Started</a>
                    <a href="#" class="btn-watch-video">
                        <i class="fas fa-play-circle"></i>Watch Video
                    </a>
                </div>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{asset('cel-assets/img/hero-carousel/erp1.jpg')}}" alt="">
          <div class="carousel-container">
            <h2>Automate Your Ambition</h2>
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
          <img src="{{asset('cel-assets/img/hero-carousel/hero-carousel-3.jpg')}}" alt="">
          <div class="carousel-container">
            <h2>Strategic IT for Streamlined Operations</h2>
            <p>Leverage expert IT consultancy to map your business processes. We then design and implement precise automation solutions that enhance efficiency, ensure accuracy, and provide a clear competitive advantage.</p>
                    <div class="btn-container">
                    <a href="#featured-services" class="btn-get-started">Get Started</a>
                    <a href="#" class="btn-watch-video">
                        <i class="fas fa-play-circle"></i>Watch Video
                    </a>
                </div>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>About Us<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            {{-- <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> --}}
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span><strong>Corporate Structure</strong>: Cyber Express Ltd is a parent company operating a diverse portfolio of subsidiaries, including Buntu Taxi Limited..</span></li>
              <li><i class="bi bi-check2-circle"></i> <span><strong>Core Focus</strong>: We provide dynamic Computer Technology & Software Development services tailored to the corporate world..</span></li>
              <li><i class="bi bi-check2-circle"></i> <span><strong>Specialization</strong>: Our expertise lies in the end-to-end process of developing, designing, upgrading, and engineering custom Business Management Systems and Applications.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span><strong>Client Value</strong>: We build the essential tools other businesses require to run their day-to-day operations with ease, efficiency, and a competitive edge.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span><strong>Team</strong>: We are a dedicated team of professional experts committed to client success and technological innovation.</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>Cyber Express is your ideal partner for I.T products and development of IT solutions, software 
developments and web site designs. The mission of Cyber Express is to utilize the cutting-edge 
technology to deliver effective business solutions.</p>
            <a href="{{ route('about') }}" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Clients Section -->
 
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

             {{-- Check if there are clients --}}
            @if($clients->count())
                {{-- Loop through the clients --}}
             @foreach($clients as $client)

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('storage/' . $client->logo) }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->
  
              @endforeach
            @else
              <p>No clients found.</p>
            @endif


        </div>

      </div>

    </section><!-- /Clients Section -->

@endsection
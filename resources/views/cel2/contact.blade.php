@extends('layouts.secondary')

@section('content')

<main class="main">

  <!-- Page Title -->
  <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/call1.jpg);">
    <div class="container">
      <h1>Contact</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Contact</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  {{-- @include('layouts/partials.teamComponent') --}}

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-5">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Address</h3>
              <p>Indeco house 5th floor, cairo road, Lusaka</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call Us</h3>
              <p>+260 973 899 909</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <p>info@cel.co.zm</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="col-lg-7">

                    {{-- Display Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

          <form action="{{ route('contact.submit') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
            <div class="row gy-4">

              @csrf {{-- Laravel security token --}}

              <div class="col-md-6">
                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}" required="">
               @error('name') <span class="text-danger">{{ $message }}</span> @enderror
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" required="">
              @error('email') <span class="text-danger">{{ $message }}</span> @enderror
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required="">{{ old('message') }}</textarea>
                 @error('message') <span class="text-danger">{{ $message }}</span> @enderror
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->

</main>

@endsection
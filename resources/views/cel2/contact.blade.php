@extends('layouts.secondary')

@section('content')

<style>
/* Contact Page - Scoped Styles */
.cel-contact-main {
    font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
}

/* Enhanced Page Title */
.cel-contact-page-title {
    background: linear-gradient(135deg, rgba(12, 30, 62, 0.9) 0%, rgba(26, 59, 107, 0.8) 100%), 
                url('assets/img/call1.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    padding: 140px 0 80px;
    position: relative;
    overflow: hidden;
}

.cel-contact-page-title::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.4);
}

.cel-contact-page-title .container {
    position: relative;
    z-index: 2;
    text-align: center;
}

.cel-contact-page-title h1 {
    font-size: 4rem;
    font-weight: 800;
    color: white;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
}

.cel-contact-breadcrumbs {
    display: inline-flex;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 25px;
    padding: 12px 25px;
}

.cel-contact-breadcrumbs ol {
    display: flex;
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 12px;
}

.cel-contact-breadcrumbs li {
    display: flex;
    align-items: center;
    font-size: 1rem;
    color: rgba(255, 255, 255, 0.9);
}

.cel-contact-breadcrumbs li:not(:last-child)::after {
    content: '›';
    margin-left: 12px;
    color: #ffc107;
    font-weight: 700;
}

.cel-contact-breadcrumbs a {
    color: rgba(255, 255, 255, 0.9);
    text-decoration: none;
    transition: color 0.3s ease;
}

.cel-contact-breadcrumbs a:hover {
    color: #ffc107;
}

.cel-contact-breadcrumbs .current {
    color: #ffc107;
    font-weight: 600;
}

/* Contact Section */
.cel-contact-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    position: relative;
}

.cel-contact-container {
    position: relative;
    z-index: 2;
}

/* Contact Grid */
.cel-contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.5fr;
    gap: 4rem;
    align-items: start;
}

/* Contact Info Cards */
.cel-contact-info {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.cel-contact-info-card {
    background: white;
    padding: 2.5rem 2rem;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    border-left: 4px solid #0c1e3e;
    transition: all 0.3s ease;
    display: flex;
    align-items: flex-start;
    gap: 1.5rem;
}

.cel-contact-info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
    border-left-color: #ffc107;
}

.cel-contact-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #0c1e3e 0%, #1a3b6b 100%);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.8rem;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.cel-contact-info-card:hover .cel-contact-icon {
    background: linear-gradient(135deg, #ffc107 0%, #ffd54f 100%);
    transform: scale(1.1);
}

.cel-contact-content h3 {
    font-size: 1.4rem;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 0.5rem;
}

.cel-contact-content p {
    color: #64748b;
    margin: 0;
    font-size: 1.1rem;
    line-height: 1.5;
}

/* Contact Form */
.cel-contact-form-container {
    background: white;
    padding: 3rem;
    border-radius: 24px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
}

.cel-contact-form-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(135deg, #0c1e3e 0%, #ffc107 50%, #0c1e3e 100%);
}

.cel-contact-form {
    width: 100%;
}

.cel-form-group {
    margin-bottom: 1.5rem;
    position: relative;
}

.cel-form-control {
    width: 100%;
    padding: 1rem 1.5rem;
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: #f8fafc;
}

.cel-form-control:focus {
    outline: none;
    border-color: #0c1e3e;
    background: white;
    box-shadow: 0 0 0 3px rgba(12, 30, 62, 0.1);
}

.cel-form-control.is-invalid {
    border-color: #dc3545;
    box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
}

.cel-form-textarea {
    resize: vertical;
    min-height: 120px;
}

.cel-form-error {
    display: block;
    color: #dc3545;
    font-size: 0.875rem;
    margin-top: 0.5rem;
    font-weight: 500;
}

/* Submit Button */
.cel-submit-btn {
    background: linear-gradient(135deg, #0c1e3e 0%, #1a3b6b 100%);
    color: white;
    border: none;
    padding: 1.25rem 3rem;
    border-radius: 12px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.cel-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(12, 30, 62, 0.3);
}

.cel-submit-btn:active {
    transform: translateY(0);
}

.cel-submit-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.cel-submit-btn:hover::before {
    left: 100%;
}

/* Alerts */
.cel-alert {
    border-radius: 12px;
    border: none;
    padding: 1.25rem 1.5rem;
    margin-bottom: 2rem;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.cel-alert-success {
    background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
    color: #155724;
    border-left: 4px solid #28a745;
}

.cel-alert-danger {
    background: linear-gradient(135deg, #f8d7da 0%, #f1b0b7 100%);
    color: #721c24;
    border-left: 4px solid #dc3545;
}

.cel-alert .cel-btn-close {
    padding: 0.75rem;
    background: transparent;
    border: none;
    font-size: 1.2rem;
    opacity: 0.7;
    transition: opacity 0.3s ease;
}

.cel-alert .cel-btn-close:hover {
    opacity: 1;
}

/* Floating Elements */
.cel-floating-elements {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
}

.cel-floating-element {
    position: absolute;
    background: rgba(12, 30, 62, 0.03);
    border-radius: 50%;
    animation: cel-float 20s infinite ease-in-out;
}

.cel-floating-element:nth-child(1) {
    width: 120px;
    height: 120px;
    top: 10%;
    left: 5%;
    animation-delay: 0s;
}

.cel-floating-element:nth-child(2) {
    width: 80px;
    height: 80px;
    top: 70%;
    right: 10%;
    animation-delay: -7s;
}

@keyframes cel-float {
    0%, 100% {
        transform: translateY(0) rotate(0deg);
    }
    33% {
        transform: translateY(-30px) rotate(120deg);
    }
    66% {
        transform: translateY(15px) rotate(240deg);
    }
}

/* Responsive Design */
@media (max-width: 992px) {
    .cel-contact-grid {
        grid-template-columns: 1fr;
        gap: 3rem;
    }
    
    .cel-contact-page-title h1 {
        font-size: 3rem;
    }
    
    .cel-contact-form-container {
        padding: 2.5rem;
    }
}

@media (max-width: 768px) {
    .cel-contact-section {
        padding: 60px 0;
    }
    
    .cel-contact-page-title {
        padding: 100px 0 60px;
        background-attachment: scroll;
    }
    
    .cel-contact-page-title h1 {
        font-size: 2.5rem;
    }
    
    .cel-contact-info-card {
        padding: 2rem 1.5rem;
    }
    
    .cel-contact-form-container {
        padding: 2rem;
    }
    
    .cel-contact-breadcrumbs {
        padding: 10px 20px;
    }
    
    .cel-contact-breadcrumbs ol {
        flex-direction: column;
        gap: 8px;
    }
    
    .cel-contact-breadcrumbs li:not(:last-child)::after {
        display: none;
    }
}

@media (max-width: 576px) {
    .cel-contact-page-title h1 {
        font-size: 2rem;
    }
    
    .cel-contact-info-card {
        flex-direction: column;
        text-align: center;
        padding: 1.5rem;
    }
    
    .cel-contact-icon {
        align-self: center;
    }
    
    .cel-contact-form-container {
        padding: 1.5rem;
    }
    
    .cel-submit-btn {
        width: 100%;
        padding: 1rem 2rem;
    }
}

/* Animation Enhancements */
[data-aos] {
    transition-duration: 0.8s;
}

.cel-contact-info-card[data-aos],
.cel-contact-form-container[data-aos] {
    transition-duration: 1s;
}
</style>

<main class="main cel-contact-main">

  <!-- Enhanced Page Title -->
  <div class="cel-contact-page-title" data-aos="fade-down">
    <div class="container">
      <h1>Get In Touch</h1>
      <nav class="cel-contact-breadcrumbs">
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="current">Contact</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Enhanced Contact Section -->
  <section id="contact" class="cel-contact-section section">

    <div class="container cel-contact-container" data-aos="fade-up" data-aos-delay="100">

      <!-- Floating Elements -->
      <div class="cel-floating-elements">
        <div class="cel-floating-element"></div>
        <div class="cel-floating-element"></div>
      </div>

      <div class="cel-contact-grid">

        <!-- Contact Information -->
        <div class="cel-contact-info">
          <div class="cel-contact-info-card" data-aos="fade-right" data-aos-delay="200">
            <div class="cel-contact-icon">
              <i class="bi bi-geo-alt"></i>
            </div>
            <div class="cel-contact-content">
              <h3>Our Location</h3>
              <p>Indeco house 5th floor, Cairo Road, Lusaka, Zambia</p>
            </div>
          </div>

          <div class="cel-contact-info-card" data-aos="fade-right" data-aos-delay="300">
            <div class="cel-contact-icon">
              <i class="bi bi-telephone"></i>
            </div>
            <div class="cel-contact-content">
              <h3>Call Us</h3>
              <p>+260 973 899 909</p>
            </div>
          </div>

          <div class="cel-contact-info-card" data-aos="fade-right" data-aos-delay="400">
            <div class="cel-contact-icon">
              <i class="bi bi-envelope"></i>
            </div>
            <div class="cel-contact-content">
              <h3>Email Us</h3>
              <p>info@cel.co.zm</p>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="cel-contact-form-container" data-aos="fade-left" data-aos-delay="500">
          
          {{-- Success Message --}}
          @if(session('success'))
            <div class="cel-alert cel-alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> {{ session('success') }}
              <button type="button" class="cel-btn-close" data-bs-dismiss="alert" aria-label="Close">
                <i class="bi bi-x"></i>
              </button>
            </div>
          @endif

          {{-- Error Message --}}
          @if(session('error'))
            <div class="cel-alert cel-alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong> {{ session('error') }}
              <button type="button" class="cel-btn-close" data-bs-dismiss="alert" aria-label="Close">
                <i class="bi bi-x"></i>
              </button>
            </div>
          @endif

          <form action="{{ route('contact.send') }}" method="POST" class="cel-contact-form">
            @csrf

            <div class="cel-form-row">
              <div class="cel-form-group" data-aos="fade-up" data-aos-delay="600">
                <input type="text" name="name" class="cel-form-control @error('name') is-invalid @enderror" 
                       placeholder="Your Full Name" value="{{ old('name') }}" required>
                @error('name') 
                  <span class="cel-form-error">{{ $message }}</span>
                @enderror
              </div>

              <div class="cel-form-group" data-aos="fade-up" data-aos-delay="650">
                <input type="email" name="email" class="cel-form-control @error('email') is-invalid @enderror" 
                       placeholder="Your Email Address" value="{{ old('email') }}" required>
                @error('email') 
                  <span class="cel-form-error">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="cel-form-group" data-aos="fade-up" data-aos-delay="700">
              <input type="text" name="subject" class="cel-form-control @error('subject') is-invalid @enderror" 
                     placeholder="Subject" value="{{ old('subject') }}" required>
              @error('subject') 
                <span class="cel-form-error">{{ $message }}</span>
              @enderror
            </div>

            <div class="cel-form-group" data-aos="fade-up" data-aos-delay="750">
              <textarea name="message" class="cel-form-control cel-form-textarea @error('message') is-invalid @enderror" 
                        rows="6" placeholder="Your Message" required>{{ old('message') }}</textarea>
              @error('message') 
                <span class="cel-form-error">{{ $message }}</span>
              @enderror
            </div>

            <div class="cel-form-group text-center" data-aos="fade-up" data-aos-delay="800">
              <button type="submit" class="cel-submit-btn">
                <i class="bi bi-send me-2"></i>Send Message
              </button>
            </div>
          </form>
        </div>

      </div>

    </div>

  </section><!-- /Contact Section -->

</main>

@endsection
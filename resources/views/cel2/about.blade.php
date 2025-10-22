@extends('layouts.secondary')

@section('content')

 <main class="main">

    <!-- Page Title -->
    <div class="page-title">
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>
        <div class="container">
            <div class="title-content">
                <h1>About Our Journey</h1>
                <p>We are passionate innovators dedicated to creating exceptional experiences. 
                  Our team combines creativity with technical expertise to deliver solutions that make a difference.</p>
                <a href="#" class="cta-button">Explore Our Story <i class="fas fa-arrow-right"></i></a>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div><!-- End Page Title -->

 <!-- About Section -->
    <section id="about" class="about section">
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        
        <div class="container">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-5">
                    <img src="assets/img/company1.jpg" class="img-fluid" alt="Cyber Express Ltd Team">
                </div>
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Who We Are</h3>
                        <p>
                            Cyber Express Ltd is an umbrella company housing a number of subsidiaries such as Buntu 
                            Taxi Limited. Cyber Express provides dynamic ways of Computer Technology & software 
                            development services to the corporate world. We are specialized in developing, 
                            designing, upgrading & engineering of Business Management Systems and Applications that 
                            other businesses require to run day-to-day activities with ease.
                        </p>
                        <p>
                            Our products & services will keep any company ahead in this competitive digital age. 
                            We are a growing market & technology driven company. Our core duty is to offer unmatched 
                            services to our clients and to redefine science and technology. We are a team of 
                            professionals dedicated to providing exceptional digital solutions to the ever-expanding 
                            needs of the business world.
                        </p>
                        
                        <div class="features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Custom Software Development</h4>
                                    <p>Tailored solutions for your unique business needs</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Business Intelligence</h4>
                                    <p>Data-driven insights to power your decisions</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Mobile Applications</h4>
                                    <p>Engaging mobile experiences for your customers</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-cloud"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Cloud Solutions</h4>
                                    <p>Scalable infrastructure for growing businesses</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="stats-container">
                            <div class="stat-item">
                                <div class="stat-number">80+</div>
                                <div class="stat-label">Projects Completed</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">10+</div>
                                <div class="stat-label">Team Members</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">5+</div>
                                <div class="stat-label">Years Experience</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">95%</div>
                                <div class="stat-label">Client Satisfaction</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->

 <!-- Why Us Section -->
<section id="why-us" class="why-us-section section">
    <div class="why-us-floating-elements">
        <div class="why-us-floating-element"></div>
        <div class="why-us-floating-element"></div>
    </div>
    
    <div class="container why-us-container">
        <div class="why-us-row g-0">
            <div class="why-us-image-col" data-aos="fade-up" data-aos-delay="100">
                <div class="why-us-image-wrapper">
                    <img src="assets/img/develop.jpg" alt="Cyber Express Development Team">
                    <div class="why-us-image-overlay"></div>
                </div>
            </div>

            <div class="why-us-content-col" data-aos="fade-up" data-aos-delay="200">
                <div class="why-us-slides-container position-relative">
                    <div class="swiper why-us-swiper">
                        <h2 class="why-us-main-title"><strong>Why Choose Cyber Express</strong></h2>
                        
                        <div class="swiper-wrapper">
                            <div class="swiper-slide why-us-swiper-slide">
                                <div class="why-us-slide-content">
                                    <h3 class="why-us-slide-title">End-to-End Expertise</h3>
                                    <h4 class="why-us-slide-subtitle">We are more than consultants.</h4>
                                    <p class="why-us-slide-text">We are developers, engineers, and strategists rolled into one. From initial concept and design to development, deployment, and ongoing training, we provide a seamless, integrated experience.</p>
                                </div>
                            </div>

                            <div class="swiper-slide why-us-swiper-slide">
                                <div class="why-us-slide-content">
                                    <h3 class="why-us-slide-title">Deeply Customized Solutions</h3>
                                    <h4 class="why-us-slide-subtitle">We don't believe in one-size-fits-all software.</h4>
                                    <p class="why-us-slide-text">We specialize in building bespoke Business Management Systems and applications tailored to your specific workflows, ensuring a perfect fit for your unique operational needs.</p>
                                </div>
                            </div>

                            <div class="swiper-slide why-us-swiper-slide">
                                <div class="why-us-slide-content">
                                    <h3 class="why-us-slide-title">Proven Results Across Industries</h3>
                                    <p class="why-us-slide-text">As the umbrella company for successful ventures like Buntu Taxi Limited, we have firsthand experience in building and managing technology that drives real business growth. We apply this practical knowledge to benefit all our clients.</p>
                                </div>
                            </div>

                            <div class="swiper-slide why-us-swiper-slide">
                                <div class="why-us-slide-content">
                                    <h3 class="why-us-slide-title">Unmatched Support & Partnership</h3>
                                    <h4 class="why-us-slide-subtitle">Our relationship doesn't end at launch.</h4>
                                    <p class="why-us-slide-text">We offer continuous maintenance, proactive support, and comprehensive technical training to ensure your team is empowered and your systems are always performing at their peak.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-pagination why-us-swiper-pagination"></div>
                    </div>

                    <div class="swiper-button-next why-us-swiper-nav-next"></div>
                    <div class="swiper-button-prev why-us-swiper-nav-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const whyUsSwiperEl = document.querySelector('.why-us-swiper');
    if (whyUsSwiperEl) {
        const swiper = new Swiper(whyUsSwiperEl, {
            loop: true,
            speed: 600,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            slidesPerView: 'auto',
            centeredSlides: true,
            pagination: {
                el: whyUsSwiperEl.querySelector('.why-us-swiper-pagination'),
                type: 'bullets',
                clickable: true
            },
            navigation: {
                nextEl: '.why-us-swiper-nav-next',
                prevEl: '.why-us-swiper-nav-prev'
            }
        });
    }
});
</script>

   <!-- Call To Action Section -->
   <section id="call-to-action" class="call-to-action section dark-background">

     <img src="assets/img/cta-bg.jpg" alt="">

     <div class="container">
       <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
         <div class="col-xl-10">
           <div class="text-center">
             <h3>Call To Action</h3>
             <p>We'd love to hear from you. Let's start a conversation!</p>
             <a class="cta-btn" href="{{ route('contact.show') }}">Give us a Call</a>
           </div>
         </div>
       </div>
     </div>

   </section><!-- /Call To Action Section -->

    <!-- Team Section -->
@include('layouts/partials.teamComponent')
   <!-- /Team Section -->


 </main>

 </main>

@endsection
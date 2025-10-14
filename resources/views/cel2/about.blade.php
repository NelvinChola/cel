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
   {{-- <section id="call-to-action" class="call-to-action section dark-background">

     <img src="assets/img/cta-bg.jpg" alt="">

     <div class="container">
       <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
         <div class="col-xl-10">
           <div class="text-center">
             <h3>Call To Action</h3>
             <p>We'd love to hear from you. Let's start a conversation!</p>
             <a class="cta-btn" href="{{ route('contact') }}">Give us a Call</a>
           </div>
         </div>
       </div>
     </div>

   </section><!-- /Call To Action Section --> --}}


   <!-- Team Section Component -->
<section id="team" class="team-section-component">
    <div class="team-floating-shapes">
        <div class="team-floating-shape"></div>
        <div class="team-floating-shape"></div>
        <div class="team-floating-shape"></div>
    </div>
    
    <div class="container team-container">
        <div class="team-section-header" data-aos="fade-up">
            <h2 class="team-main-title">Meet Our Team</h2>
            <p class="team-section-subtitle">
                A dedicated team of professionals committed to delivering exceptional digital solutions 
                and driving innovation in the technology space.
            </p>
        </div>

        <div class="team-members-grid">
            @if(isset($teamMembers) && count($teamMembers) > 0)
                @foreach($teamMembers as $index => $member)
                    <div class="team-member-card" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                        <div class="team-member-image">
                            <img src="{{ $member['image'] ?? 'assets/img/team/placeholder.jpg' }}" alt="{{ $member['name'] }}">
                            <div class="team-member-overlay"></div>
                            <div class="team-member-social">
                                @if(isset($member['linkedin']))
                                    <a href="{{ $member['linkedin'] }}" class="team-social-link" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                @endif
                                @if(isset($member['twitter']))
                                    <a href="{{ $member['twitter'] }}" class="team-social-link" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                @endif
                                @if(isset($member['github']))
                                    <a href="{{ $member['github'] }}" class="team-social-link" target="_blank">
                                        <i class="fab fa-github"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h3 class="team-member-name">{{ $member['name'] }}</h3>
                            <p class="team-member-role">{{ $member['position'] }}</p>
                            <p class="team-member-bio">
                                {{ $member['bio'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Fallback static team members -->
                @php
                    $fallbackTeam = [
                        [
                            'name' => 'John Doe',
                            'position' => 'Chief Technology Officer',
                            'bio' => 'Leads our technical vision and oversees all software development projects with 10+ years of experience in enterprise solutions.',
                            'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                            'linkedin' => '#',
                            'twitter' => '#',
                            'github' => '#'
                        ],
                        [
                            'name' => 'Jane Smith',
                            'position' => 'Lead Software Engineer',
                            'bio' => 'Specializes in full-stack development and system architecture with expertise in modern web technologies and cloud infrastructure.',
                            'image' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                            'linkedin' => '#',
                            'twitter' => '#',
                            'github' => '#'
                        ],
                        [
                            'name' => 'Mike Johnson',
                            'position' => 'Product Manager',
                            'bio' => 'Bridges the gap between client needs and technical implementation, ensuring our solutions deliver maximum business value.',
                            'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                            'linkedin' => '#',
                            'twitter' => '#',
                            'github' => '#'
                        ]
                    ];
                @endphp
                
                @foreach($fallbackTeam as $index => $member)
                    <div class="team-member-card" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                        <div class="team-member-image">
                            <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}">
                            <div class="team-member-overlay"></div>
                            <div class="team-member-social">
                                <a href="{{ $member['linkedin'] }}" class="team-social-link">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="{{ $member['twitter'] }}" class="team-social-link">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="{{ $member['github'] }}" class="team-social-link">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h3 class="team-member-name">{{ $member['name'] }}</h3>
                            <p class="team-member-role">{{ $member['position'] }}</p>
                            <p class="team-member-bio">{{ $member['bio'] }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="team-cta-section" data-aos="fade-up">
            <h3 class="team-cta-title">Ready to Work With Us?</h3>
            <p class="team-cta-text">
                Our team is ready to help transform your business with cutting-edge technology solutions.
            </p>
            <a href="{{ route('contact') }}" class="team-cta-button">
                Get In Touch <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
       <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #333;
        }

        .page-title {
            position: relative;
            min-height: 70vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: linear-gradient(135deg, #3a0ca3 0%, #003566 100%);
        }

        .page-title::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://media.istockphoto.com/id/2228764569/photo/hispanic-female-software-developer-coding-at-night-in-office.jpg?s=612x612&w=0&k=20&c=d6bNhps-84PN0uBSzec-s1Dqwe6e74A1QIvDqrMFBCI=');
            background-size: cover;
            background-position: center;
            opacity: 0.15;
            z-index: 1;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        .title-content {
            max-width: 600px;
            color: white;
            padding: 40px 0;
        }

        .title-content h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.1;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
            background: linear-gradient(to right, #fff 0%, #a8edea 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: fadeInUp 1s ease-out;
        }

        .title-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
            line-height: 1.6;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        .cta-button {
            display: inline-block;
            padding: 14px 32px;
            background: linear-gradient(45deg, #ff8a00, #e52e71);
            color: white;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .breadcrumbs {
            margin-top: 30px;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .breadcrumbs ol {
            display: flex;
            list-style: none;
            padding: 0;
        }

        .breadcrumbs li {
            margin-right: 10px;
            font-size: 0.9rem;
        }

        .breadcrumbs li:not(:last-child)::after {
            content: ">";
            margin-left: 10px;
            opacity: 0.7;
        }

        .breadcrumbs a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumbs a:hover {
            color: white;
        }

        .breadcrumbs .current {
            color: #ffcc00;
            font-weight: 600;
        }

        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }

        .floating-element {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 15s infinite linear;
        }

        .floating-element:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            left: 80%;
            animation-delay: -5s;
        }

        .floating-element:nth-child(3) {
            width: 60px;
            height: 60px;
            top: 80%;
            left: 20%;
            animation-delay: -10s;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0.7;
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
                opacity: 1;
            }
            100% {
                transform: translateY(0) rotate(360deg);
                opacity: 0.7;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .title-content h1 {
                font-size: 2.5rem;
            }
            
            .title-content p {
                font-size: 1rem;
            }
            
            .cta-button {
                padding: 12px 24px;
                font-size: 0.9rem;
            }
        }



         /* About Section Styles */
        .about {
            padding: 100px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
            position: relative;
            overflow: hidden;
        }

        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            opacity: 0.1;
            border-radius: 50%;
        }

        .shape-1 {
            width: 200px;
            height: 200px;
            background: #3a0ca3;
            top: 10%;
            left: 5%;
            animation: float 15s infinite ease-in-out;
        }

        .shape-2 {
            width: 150px;
            height: 150px;
            background: #003566;
            bottom: 10%;
            right: 5%;
            animation: float 18s infinite ease-in-out reverse;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transform: perspective(1000px) rotateY(-5deg);
            transition: all 0.5s ease;
        }

        .img-fluid:hover {
            transform: perspective(1000px) rotateY(0deg);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .content {
            padding: 30px 0 30px 40px;
        }

        .content h3 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 25px;
            color: #2c3e50;
            position: relative;
            display: inline-block;
        }

        .content h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(45deg, #3a0ca3, #003566);
            border-radius: 2px;
        }

        .content p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: #555;
            line-height: 1.8;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 40px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            padding: 15px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, #3a0ca3, #003566);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .feature-icon i {
            color: white;
            font-size: 1.2rem;
        }

        .feature-text h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: #2c3e50;
        }

        .feature-text p {
            font-size: 0.9rem;
            margin: 0;
            color: #666;
        }

        .stats-container {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #eaeaea;
        }

        .stat-item {
            text-align: center;
            flex: 1;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #3a0ca3;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .col-lg-5, .col-lg-7 {
                flex: 0 0 100%;
                max-width: 100%;
            }
            
            .content {
                padding: 30px 0 0 0;
            }
            
            .img-fluid {
                transform: none;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-container {
                flex-wrap: wrap;
                gap: 20px;
            }
            
            .stat-item {
                flex: 0 0 calc(50% - 20px);
            }
        }

        @media (max-width: 576px) {
            .stat-item {
                flex: 0 0 100%;
            }
            
            .content h3 {
                font-size: 2rem;
            }
        }

        /* Animation for AOS compatibility */
        [data-aos="fade-up"] {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        [data-aos="fade-up"].aos-animate {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Why Us Section - Scoped Styles */
.why-us-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #0c0c2c 0%, #1a1a3e 100%);
    position: relative;
    overflow: hidden;
}

.why-us-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: 
        radial-gradient(circle at 20% 80%, rgba(58, 12, 163, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(0, 53, 102, 0.1) 0%, transparent 50%);
    z-index: 1;
}

.why-us-container {
    position: relative;
    z-index: 2;
}

.why-us-row {
    display: flex;
    flex-wrap: wrap;
    margin: 0;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
    background: rgba(255, 255, 255, 0.02);
    backdrop-filter: blur(10px);
}

.why-us-image-col {
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
    padding: 0;
}

.why-us-content-col {
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
    padding: 0;
}

.why-us-image-wrapper {
    position: relative;
    height: 100%;
    min-height: 600px;
}

.why-us-image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
}

.why-us-image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, rgba(58, 12, 163, 0.8), rgba(0, 53, 102, 0.6));
    z-index: 1;
}

.why-us-slides-container {
    background: linear-gradient(135deg, #1e1e3e 0%, #2d2d5a 100%);
    padding: 60px 50px;
    position: relative;
    height: 100%;
    display: flex;
    align-items: center;
}

.why-us-swiper {
    width: 100%;
    height: auto;
}

.why-us-swiper-slide {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px 10px;
    opacity: 0.4;
    transform: scale(0.9);
    transition: all 0.5s ease;
}

.why-us-swiper-slide-active {
    opacity: 1;
    transform: scale(1);
}

.why-us-slide-content {
    max-width: 520px;
    color: white;
    text-align: left;
}

.why-us-main-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: white;
    margin-bottom: 40px;
    text-align: center;
    background: linear-gradient(135deg, #fff 0%, #a8edea 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.why-us-slide-title {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 20px;
    color: #4cc9f0;
    position: relative;
    padding-left: 30px;
    line-height: 1.3;
}

.why-us-slide-title::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 18px;
    height: 18px;
    background: linear-gradient(45deg, #3a0ca3, #7209b7);
    border-radius: 50%;
}

.why-us-slide-subtitle {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 20px;
    color: #f8f9fa;
    font-style: italic;
    line-height: 1.4;
}

.why-us-slide-text {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #e9ecef;
    margin-bottom: 0;
}

/* Navigation - Scoped */
.why-us-swiper-nav-next,
.why-us-swiper-nav-prev {
    width: 50px;
    height: 50px;
    background: linear-gradient(45deg, #3a0ca3, #7209b7);
    border-radius: 50%;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
    margin-top: -25px;
}

.why-us-swiper-nav-next::after,
.why-us-swiper-nav-prev::after {
    font-size: 1.2rem;
    color: white;
    font-weight: bold;
}

.why-us-swiper-nav-next:hover,
.why-us-swiper-nav-prev:hover {
    transform: scale(1.1);
    box-shadow: 0 8px 25px rgba(58, 12, 163, 0.4);
}

/* Pagination - Scoped */
.why-us-swiper-pagination {
    bottom: 20px !important;
}

.why-us-swiper-pagination .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background: rgba(255, 255, 255, 0.5);
    opacity: 1;
    transition: all 0.3s ease;
}

.why-us-swiper-pagination .swiper-pagination-bullet-active {
    background: linear-gradient(45deg, #3a0ca3, #7209b7);
    transform: scale(1.3);
}

/* Floating Elements - Scoped */
.why-us-floating-elements {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    pointer-events: none;
}

.why-us-floating-element {
    position: absolute;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 50%;
    animation: why-us-float 15s infinite ease-in-out;
}

.why-us-floating-element:nth-child(1) {
    width: 100px;
    height: 100px;
    top: 20%;
    left: 10%;
    animation-delay: 0s;
}

.why-us-floating-element:nth-child(2) {
    width: 150px;
    height: 150px;
    top: 60%;
    right: 10%;
    animation-delay: -5s;
}

@keyframes why-us-float {
    0%, 100% {
        transform: translateY(0) rotate(0deg);
    }
    50% {
        transform: translateY(-20px) rotate(180deg);
    }
}

/* Responsive Design */
@media (max-width: 1200px) {
    .why-us-image-col,
    .why-us-content-col {
        flex: 0 0 100%;
        max-width: 100%;
    }
    
    .why-us-image-wrapper {
        min-height: 400px;
    }
    
    .why-us-slides-container {
        padding: 40px 30px;
    }
}

@media (max-width: 768px) {
    .why-us-section {
        padding: 60px 0;
    }
    
    .why-us-main-title {
        font-size: 2rem;
        margin-bottom: 30px;
    }
    
    .why-us-slide-title {
        font-size: 1.5rem;
        padding-left: 25px;
    }
    
    .why-us-slide-title::before {
        width: 15px;
        height: 15px;
    }
    
    .why-us-slide-subtitle {
        font-size: 1.1rem;
    }
    
    .why-us-slides-container {
        padding: 30px 20px;
    }
    
    .why-us-swiper-nav-next,
    .why-us-swiper-nav-prev {
        display: none;
    }
}

@media (max-width: 576px) {
    .why-us-main-title {
        font-size: 1.8rem;
    }
    
    .why-us-slide-title {
        font-size: 1.3rem;
    }
    
    .why-us-slide-text {
        font-size: 1rem;
    }
    
    .why-us-slides-container {
        padding: 25px 15px;
    }
}


/* Team Section - Scoped Styles */
.team-section-component {
    padding: 100px 0;
    background: linear-gradient(135deg, #f8faff 0%, #e8f0ff 100%);
    position: relative;
    overflow: hidden;
}

.team-section-component::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%233a0ca3" fill-opacity="0.02" points="0,0 1000,1000 0,1000"/></svg>');
}

.team-container {
    position: relative;
    z-index: 2;
}

.team-section-header {
    text-align: center;
    margin-bottom: 80px;
}

.team-main-title {
    font-size: 3rem;
    font-weight: 800;
    color: #1a1a2e;
    margin-bottom: 20px;
    background: linear-gradient(135deg, #3a0ca3 0%, #003566 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.team-section-subtitle {
    font-size: 1.2rem;
    color: #4a5568;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

.team-members-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
    margin-bottom: 60px;
}

.team-member-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    position: relative;
}

.team-member-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(58, 12, 163, 0.15);
}

.team-member-image {
    position: relative;
    height: 320px;
    overflow: hidden;
}

.team-member-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.team-member-card:hover .team-member-image img {
    transform: scale(1.05);
}

.team-member-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(transparent 60%, rgba(58, 12, 163, 0.8));
    opacity: 0;
    transition: opacity 0.3s ease;
}

.team-member-card:hover .team-member-overlay {
    opacity: 1;
}

.team-member-social {
    position: absolute;
    bottom: 20px;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: center;
    gap: 15px;
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.3s ease;
}

.team-member-card:hover .team-member-social {
    transform: translateY(0);
    opacity: 1;
}

.team-social-link {
    width: 40px;
    height: 40px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #3a0ca3;
    text-decoration: none;
    transition: all 0.3s ease;
}

.team-social-link:hover {
    background: #3a0ca3;
    color: white;
    transform: scale(1.1);
}

.team-member-info {
    padding: 30px;
    text-align: center;
}

.team-member-name {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 8px;
}

.team-member-role {
    font-size: 1.1rem;
    color: #3a0ca3;
    font-weight: 600;
    margin-bottom: 15px;
}

.team-member-bio {
    font-size: 0.95rem;
    color: #4a5568;
    line-height: 1.6;
    margin-bottom: 0;
}

.team-cta-section {
    text-align: center;
    padding: 60px 0 0;
}

.team-cta-title {
    font-size: 2rem;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 20px;
}

.team-cta-text {
    font-size: 1.1rem;
    color: #4a5568;
    margin-bottom: 30px;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}

.team-cta-button {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 35px;
    background: linear-gradient(135deg, #3a0ca3 0%, #003566 100%);
    color: white;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(58, 12, 163, 0.3);
}

.team-cta-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(58, 12, 163, 0.4);
    color: white;
}

.team-floating-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
}

.team-floating-shape {
    position: absolute;
    border-radius: 50%;
    background: rgba(58, 12, 163, 0.05);
    animation: team-float 20s infinite ease-in-out;
}

.team-floating-shape:nth-child(1) {
    width: 120px;
    height: 120px;
    top: 10%;
    left: 5%;
    animation-delay: 0s;
}

.team-floating-shape:nth-child(2) {
    width: 80px;
    height: 80px;
    top: 70%;
    right: 10%;
    animation-delay: -7s;
}

.team-floating-shape:nth-child(3) {
    width: 60px;
    height: 60px;
    bottom: 20%;
    left: 15%;
    animation-delay: -14s;
}

@keyframes team-float {
    0%, 100% {
        transform: translateY(0) rotate(0deg) scale(1);
    }
    33% {
        transform: translateY(-30px) rotate(120deg) scale(1.1);
    }
    66% {
        transform: translateY(15px) rotate(240deg) scale(0.9);
    }
}

/* Responsive Design */
@media (max-width: 1200px) {
    .team-members-grid {
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }
}

@media (max-width: 768px) {
    .team-section-component {
        padding: 60px 0;
    }
    
    .team-main-title {
        font-size: 2.2rem;
    }
    
    .team-section-header {
        margin-bottom: 50px;
    }
    
    .team-members-grid {
        grid-template-columns: 1fr;
        gap: 30px;
        max-width: 400px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .team-cta-title {
        font-size: 1.6rem;
    }
    
    .team-member-image {
        height: 280px;
    }
}

@media (max-width: 480px) {
    .team-main-title {
        font-size: 1.8rem;
    }
    
    .team-member-info {
        padding: 20px;
    }
    
    .team-member-name {
        font-size: 1.3rem;
    }
    
    .team-cta-button {
        padding: 12px 25px;
    }
}
    </style>

 </main>

 </main>

@endsection
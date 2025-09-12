@extends('layouts.secondary')

@section('content')

 <main class="main">

   <!-- Page Title -->
   <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/cel1.jpg);">
     <div class="container">
       <h1>About</h1>
       <nav class="breadcrumbs">
         <ol>
           <li><a href="index.html">Home</a></li>
           <li class="current">About</li>
         </ol>
       </nav>
     </div>
   </div><!-- End Page Title -->

   <!-- About Section -->
   <section id="about" class="about section">

     <div class="container">

       <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
         <div class="col-lg-5">
           <img src="assets/img/company1.jpg" class="img-fluid" alt="">
         </div>
         <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
           <div class="content">
             <h3>Who we are?</h3>
             <p>
               Cyber Express Ltd is an umbrella company housing a number of subsidiaries such as Buntu 
               Taxi Limited. Cyber Express provides dynamic ways of Computer Technology & software 
               development services to the corporate world. Cyber Express is specialised in developing, 
               designing, upgrading & engineering of Business Management Systems and Applications that 
               other businesses requires to run day to day business activities with ease. Our products & 
               services will keep any company ahead in this competitive digital age. We are a growing 
               market & technology driven company. Our core duty is to offer unmatched services to our 
               clients and to redefine science and technology. We are a team of professionals dedicated to 
               providing exceptional digital solutions to the ever-expanding needs of business world.  
             </p>
             {{-- <ul>
               <li><i class="bi bi-check-circle-fill"></i> <span>Business Intelligence</span></li>
               <li><i class="bi bi-check-circle-fill"></i> <span>Outsourcing</span></li>
             </ul> --}}
           </div>
         </div>
       </div>

     </div>

   </section><!-- /About Section -->

   <!-- Why Us Section -->
   <section id="why-us" class="why-us section">

     <div class="container">

       <div class="row g-0">

         <div class="col-xl-5 img-bg" data-aos="fade-up" data-aos-delay="100">
           <img src="assets/img/develop.jpg" alt="">
         </div>

         <div class="col-xl-7 slides position-relative" data-aos="fade-up" data-aos-delay="200">               


           <div class="swiper init-swiper">
             <script type="application/json" class="swiper-config">
               {
                 "loop": true,
                 "speed": 600,
                 "autoplay": {
                   "delay": 5000
                 },
                 "slidesPerView": "auto",
                 "centeredSlides": true,
                 "pagination": {
                   "el": ".swiper-pagination",
                   "type": "bullets",
                   "clickable": true
                 },
                 "navigation": {
                   "nextEl": ".swiper-button-next",
                   "prevEl": ".swiper-button-prev"
                 }
               }
             </script>


             <div><h2 class="mb-4"><strong>Why Choose Cyber Express</strong></h2></div>
             <div class="swiper-wrapper">

               <div class="swiper-slide">
                 <div class="item">
                   <h3 class="mb-3">End-to-End Expertise</h3>
                   <h4 class="mb-3">We are more than consultants.</h4>
                   <p>We are developers, engineers, and strategists rolled into one. From initial concept and design to development, 
                    deployment, and ongoing training, we provide a seamless, integrated experience.</p>
                 </div>
               </div><!-- End slide item -->

               <div class="swiper-slide">
                 <div class="item">
                   <h3 class="mb-3">Deeply Customized Solutions</h3>
                   <h4 class="mb-3">We don't believe in one-size-fits-all software.</h4>
                   <p>We specialize in building bespoke Business Management Systems and applications tailored to 
                    your specific workflows, ensuring a perfect fit for your unique operational needs.</p>
                 </div>
               </div><!-- End slide item -->

               <div class="swiper-slide">
                 <div class="item">
                   <h3 class="mb-3">Proven Results Across Industries</h3>
                   {{-- <h4 class="mb-3">Necessitatibus voluptatibus explicabo dolores a vitae voluptatum.</h4> --}}
                   <p>As the umbrella company for successful ventures like Buntu Taxi Limited, 
                    we have firsthand experience in building and managing technology that drives real business growth. 
                    We apply this practical knowledge to benefit all our clients.</p>
                 </div>
               </div><!-- End slide item -->

               <div class="swiper-slide">
                 <div class="item">
                   <h3 class="mb-3">Unmatched Support & Partnership:</h3>
                   <h4 class="mb-3">Our relationship doesn't end at launch.</h4>
                   <p>We offer continuous maintenance, proactive support, and comprehensive technical training to 
                    ensure your team is empowered and your systems are always performing at their peak.</p>
                 </div>
               </div><!-- End slide item -->

             </div>
             <div class="swiper-pagination"></div>
           </div>

           <div class="swiper-button-prev"></div>
           <div class="swiper-button-next"></div>
         </div>

       </div>

     </div>

   </section><!-- /Why Us Section -->

   <!-- Call To Action Section -->
   <section id="call-to-action" class="call-to-action section dark-background">

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

   </section><!-- /Call To Action Section -->

    <!-- Team Section -->
@include('layouts/partials.teamComponent')
   <!-- /Team Section -->

 </main>

 </main>

@endsection
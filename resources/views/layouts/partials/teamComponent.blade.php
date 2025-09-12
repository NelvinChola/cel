   <!-- Team Section -->
   <section id="team" class="team section">

     <!-- Section Title -->
     <div class="container section-title" data-aos="fade-up">
       <h2>Our Team</h2>
       <p>Meet the talented people behind our success</p>
     </div><!-- End Section Title -->

     <div class="container">

       <div class="row gy-4">

         @if($teamMembers->count())
             @foreach($teamMembers as $member)

         <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">


           <div class="team-member">
             <div class="member-img">
               <img src="{{ asset('storage/' . $member->photo) }}" class="img-fluid" alt="{{ $member->name }}">
               <div class="social">
                 <a href=""><i class="bi bi-twitter-x"></i></a>
                 <a href=""><i class="bi bi-facebook"></i></a>
                 <a href=""><i class="bi bi-instagram"></i></a>
                 <a href=""><i class="bi bi-linkedin"></i></a>
               </div>
             </div>
             <div class="member-info">
               <h4>{{ $member->name }}</h4>
               <span>{{ $member->position }}</span>
             </div>
           </div>

           
         </div><!-- End Team Member -->
          @endforeach
            @else
            <p class="text-center">Our team profiles are coming soon.</p>
        @endif

       </div>

     </div>

   </section><!-- /Team Section -->
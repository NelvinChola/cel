<!-- Team Section -->
<section id="team" class="team-section-modern section">
    <div class="team-floating-shapes">
        <div class="team-floating-shape"></div>
        <div class="team-floating-shape"></div>
        <div class="team-floating-shape"></div>
    </div>

    <!-- Section Title -->
    <div class="container section-title-modern" data-aos="fade-up">
        <h2>Our Team</h2>
        <p>Meet the talented people behind our success</p>
    </div><!-- End Section Title -->

    <div class="container team-container-modern">
        <div class="team-grid-modern">
            @if($teamMembers->count())
                @foreach($teamMembers as $member)
                <div class="team-member-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="member-img-container">
                        <img src="{{ asset('storage/' . $member->photo) }}" class="img-fluid" alt="{{ $member->name }}">
                        <div class="member-overlay"></div>
                        <div class="member-social">
                            <a href="#" class="social-link">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                    <div class="member-info-modern">
                        <h4 class="member-name">{{ $member->name }}</h4>
                        <span class="member-position">{{ $member->position }}</span>
                    </div>
                </div>
                @endforeach
            @else
                <div class="no-team-message" data-aos="fade-up">
                    <p>Our team profiles are coming soon.</p>
                </div>
            @endif
        </div>
    </div>
</section><!-- /Team Section -->
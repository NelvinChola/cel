@extends('layouts.secondary')

@section('content')

<style>
/* Portfolio Page - Scoped Styles */
.cel-portfolio-main {
    font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
    background: #f8fafc;
}

/* Enhanced Page Title */
.cel-portfolio-hero {
    background: linear-gradient(135deg, rgba(12, 30, 62, 0.9) 0%, rgba(26, 59, 107, 0.8) 100%), 
                url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    padding: 140px 0 80px;
    position: relative;
    overflow: hidden;
    min-height: 60vh;
    display: flex;
    align-items: center;
}

.cel-portfolio-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
}

.cel-portfolio-hero .container {
    position: relative;
    z-index: 2;
    text-align: center;
}

.cel-portfolio-hero h1 {
    font-size: 4rem;
    font-weight: 800;
    color: white;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    background: linear-gradient(135deg, #fff 0%, #ffc107 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.cel-portfolio-breadcrumbs {
    display: inline-flex;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 25px;
    padding: 12px 25px;
}

.cel-portfolio-breadcrumbs ol {
    display: flex;
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 12px;
}

.cel-portfolio-breadcrumbs li {
    display: flex;
    align-items: center;
    font-size: 1rem;
    color: rgba(255, 255, 255, 0.9);
}

.cel-portfolio-breadcrumbs li:not(:last-child)::after {
    content: '›';
    margin-left: 12px;
    color: #ffc107;
    font-weight: 700;
}

.cel-portfolio-breadcrumbs a {
    color: rgba(255, 255, 255, 0.9);
    text-decoration: none;
    transition: color 0.3s ease;
}

.cel-portfolio-breadcrumbs a:hover {
    color: #ffc107;
}

.cel-portfolio-breadcrumbs .current {
    color: #ffc107;
    font-weight: 600;
}

/* Portfolio Section */
.cel-portfolio-section {
    padding: 100px 0;
    position: relative;
}

.cel-portfolio-container {
    position: relative;
    z-index: 2;
}

/* Portfolio Filters */
.cel-portfolio-filters {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1rem;
    margin-bottom: 4rem;
    list-style: none;
    padding: 0;
}

.cel-portfolio-filter {
    padding: 1rem 2rem;
    background: white;
    border: 2px solid #e2e8f0;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 600;
    color: #64748b;
    font-size: 1rem;
    position: relative;
    overflow: hidden;
}

.cel-portfolio-filter::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(12, 30, 62, 0.1), transparent);
    transition: left 0.5s ease;
}

.cel-portfolio-filter:hover {
    border-color: #0c1e3e;
    color: #0c1e3e;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(12, 30, 62, 0.15);
}

.cel-portfolio-filter:hover::before {
    left: 100%;
}

.cel-portfolio-filter.cel-filter-active {
    background: linear-gradient(135deg, #0c1e3e 0%, #1a3b6b 100%);
    border-color: #0c1e3e;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(12, 30, 62, 0.3);
}

/* Portfolio Grid */
.cel-portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
    gap: 2.5rem;
    margin-bottom: 4rem;
}

.cel-portfolio-item {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
}

.cel-portfolio-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
}

.cel-portfolio-image {
    position: relative;
    height: 280px;
    overflow: hidden;
}

.cel-portfolio-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}

.cel-portfolio-item:hover .cel-portfolio-image img {
    transform: scale(1.1);
}

.cel-portfolio-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(transparent 40%, rgba(12, 30, 62, 0.9));
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    align-items: flex-end;
    padding: 2rem;
}

.cel-portfolio-item:hover .cel-portfolio-overlay {
    opacity: 1;
}

.cel-portfolio-actions {
    display: flex;
    gap: 1rem;
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.3s ease 0.1s;
}

.cel-portfolio-item:hover .cel-portfolio-actions {
    transform: translateY(0);
    opacity: 1;
}

.cel-portfolio-action {
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #0c1e3e;
    text-decoration: none;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.cel-portfolio-action:hover {
    background: #ffc107;
    color: #0c1e3e;
    transform: scale(1.1);
}

/* Portfolio Info */
.cel-portfolio-info {
    padding: 2rem;
}

.cel-portfolio-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 1rem;
    line-height: 1.3;
}

.cel-portfolio-description {
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 1.5rem;
    font-size: 1rem;
}

.cel-portfolio-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 1.5rem;
    border-top: 1px solid #f1f5f9;
}

.cel-portfolio-category {
    background: #f1f5f9;
    color: #64748b;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 600;
}

.cel-portfolio-date {
    color: #94a3b8;
    font-size: 0.9rem;
    font-weight: 500;
}

/* Empty State */
.cel-portfolio-empty {
    grid-column: 1 / -1;
    text-align: center;
    padding: 6rem 2rem;
    color: #64748b;
}

.cel-portfolio-empty-icon {
    font-size: 4rem;
    margin-bottom: 1.5rem;
    color: #cbd5e0;
    opacity: 0.5;
}

.cel-portfolio-empty h3 {
    font-size: 1.5rem;
    color: #475569;
    margin-bottom: 1rem;
}

.cel-portfolio-empty p {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    max-width: 400px;
    margin-left: auto;
    margin-right: auto;
}

/* Loading State */
.cel-portfolio-loading {
    display: none;
    text-align: center;
    padding: 4rem 2rem;
    color: #64748b;
}

.cel-portfolio-loading.active {
    display: block;
}

.cel-loading-spinner {
    width: 50px;
    height: 50px;
    border: 4px solid #f1f5f9;
    border-top: 4px solid #0c1e3e;
    border-radius: 50%;
    animation: cel-spin 1s linear infinite;
    margin: 0 auto 1rem;
}

@keyframes cel-spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Pagination */
.cel-portfolio-pagination {
    display: flex;
    justify-content: center;
    margin-top: 4rem;
}

.cel-portfolio-pagination .pagination {
    gap: 0.5rem;
}

.cel-portfolio-pagination .page-link {
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    color: #475569;
    padding: 0.75rem 1.25rem;
    transition: all 0.3s ease;
    font-weight: 600;
    background: white;
}

.cel-portfolio-pagination .page-link:hover {
    background: #0c1e3e;
    border-color: #0c1e3e;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(12, 30, 62, 0.2);
}

.cel-portfolio-pagination .page-item.active .page-link {
    background: linear-gradient(135deg, #0c1e3e 0%, #1a3b6b 100%);
    border-color: #0c1e3e;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(12, 30, 62, 0.3);
}

/* Floating Elements */
.cel-portfolio-floating {
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

.cel-floating-element:nth-child(3) {
    width: 60px;
    height: 60px;
    bottom: 20%;
    left: 15%;
    animation-delay: -14s;
}

@keyframes cel-float {
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

/* Animation Classes */
.cel-fade-in-up {
    opacity: 0;
    transform: translateY(30px);
    animation: cel-fadeInUp 0.6s ease-out forwards;
}

.cel-zoom-in {
    opacity: 0;
    transform: scale(0.9);
    animation: cel-zoomIn 0.4s ease-out forwards;
}

@keyframes cel-fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes cel-zoomIn {
    to {
        opacity: 1;
        transform: scale(1);
    }
}

/* Responsive Design */
@media (max-width: 1200px) {
    .cel-portfolio-grid {
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
    }
}

@media (max-width: 768px) {
    .cel-portfolio-hero {
        padding: 100px 0 60px;
        min-height: 50vh;
        background-attachment: scroll;
    }
    
    .cel-portfolio-hero h1 {
        font-size: 2.5rem;
    }
    
    .cel-portfolio-section {
        padding: 60px 0;
    }
    
    .cel-portfolio-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        max-width: 400px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .cel-portfolio-filters {
        gap: 0.5rem;
    }
    
    .cel-portfolio-filter {
        padding: 0.75rem 1.5rem;
        font-size: 0.9rem;
    }
    
    .cel-portfolio-image {
        height: 240px;
    }
}

@media (max-width: 480px) {
    .cel-portfolio-hero {
        padding: 80px 0 40px;
    }
    
    .cel-portfolio-hero h1 {
        font-size: 2rem;
    }
    
    .cel-portfolio-breadcrumbs {
        padding: 10px 20px;
    }
    
    .cel-portfolio-breadcrumbs ol {
        flex-direction: column;
        gap: 8px;
    }
    
    .cel-portfolio-breadcrumbs li:not(:last-child)::after {
        display: none;
    }
    
    .cel-portfolio-info {
        padding: 1.5rem;
    }
    
    .cel-portfolio-title {
        font-size: 1.2rem;
    }
}
</style>

<main class="main cel-portfolio-main">

   <!-- Enhanced Portfolio Hero -->
   <div class="cel-portfolio-hero" data-aos="fade-down">
     <div class="container">
       <h1>Our Portfolio</h1>
       <nav class="cel-portfolio-breadcrumbs">
         <ol>
           <li><a href="{{ url('/') }}">Home</a></li>
           <li class="current">Portfolio</li>
         </ol>
       </nav>
     </div>
   </div><!-- End Hero -->

   <!-- Portfolio Section -->
   <section id="portfolio" class="cel-portfolio-section section">
     
     <!-- Floating Elements -->
     <div class="cel-portfolio-floating">
        <div class="cel-floating-element"></div>
        <div class="cel-floating-element"></div>
        <div class="cel-floating-element"></div>
     </div>

     <div class="container cel-portfolio-container">

       <!-- Portfolio Filters -->
       <ul class="cel-portfolio-filters" data-aos="fade-up" data-aos-delay="100">
         <li data-filter="*" class="cel-portfolio-filter {{ is_null($category) ? 'cel-filter-active' : '' }}">
           All Projects
         </li>
         @foreach($categories as $cat)
           <li data-filter=".filter-{{ $cat->id }}" 
               class="cel-portfolio-filter {{ $category == $cat->id ? 'cel-filter-active' : '' }}">
             {{ $cat->name }}
           </li>
         @endforeach
       </ul>

       <!-- Loading Indicator -->
       <div class="cel-portfolio-loading" id="celPortfolioLoading">
         <div class="cel-loading-spinner"></div>
         <p>Loading projects...</p>
       </div>

       <!-- Portfolio Grid -->
       <div class="cel-portfolio-grid" id="celPortfolioGrid">

         @forelse($products as $product)
           <div class="cel-portfolio-item cel-fade-in-up isotope-item filter-{{ $product->category_id }}">
             
             <!-- Portfolio Image -->
             <div class="cel-portfolio-image">
               @if(!empty($product->images) && is_array($product->images) && count($product->images) > 0)
                 <img src="{{ asset('storage/' . $product->images[0]) }}" 
                      alt="{{ $product->name }}"
                      loading="lazy">
               @else
                 <img src="{{ asset('assets/img/placeholder.jpg') }}" 
                      alt="No Image Available"
                      loading="lazy">
               @endif
               
               <!-- Hover Overlay -->
               <div class="cel-portfolio-overlay">
                 <div class="cel-portfolio-actions">
                   @if(!empty($product->images) && is_array($product->images) && count($product->images) > 0)
                     <a href="{{ asset('storage/' . $product->images[0]) }}" 
                        title="View {{ $product->name }}" 
                        data-gallery="portfolio-gallery" 
                        class="glightbox cel-portfolio-action">
                        <i class="bi bi-zoom-in"></i>
                     </a>
                   @endif
                   
                   <a href="#" 
                      title="More Details" 
                      class="cel-portfolio-action">
                      <i class="bi bi-link-45deg"></i>
                   </a>
                 </div>
               </div>
             </div>

             <!-- Portfolio Info -->
             <div class="cel-portfolio-info">
               <h4 class="cel-portfolio-title">{{ $product->name }}</h4>
               <p class="cel-portfolio-description">
                 {{ Str::limit($product->description ?? 'No description available.', 120) }}
               </p>
               
               <div class="cel-portfolio-meta">
                 <span class="cel-portfolio-category">
                   @php
                     $categoryName = $categories->firstWhere('id', $product->category_id)->name ?? 'Uncategorized';
                   @endphp
                   {{ $categoryName }}
                 </span>
                 <span class="cel-portfolio-date">
                   {{ $product->created_at->format('M Y') }}
                 </span>
               </div>
             </div>
           </div>
         @empty
           <div class="cel-portfolio-empty">
             <div class="cel-portfolio-empty-icon">
               <i class="bi bi-inbox"></i>
             </div>
             <h3>No Projects Found</h3>
             <p>We couldn't find any projects matching your criteria. Please try a different filter or check back later.</p>
             <a href="{{ url('/') }}" class="btn btn-primary">
               Return Home
             </a>
           </div>
         @endforelse

       </div>

       <!-- Pagination -->
       @if($products->hasPages())
         <div class="cel-portfolio-pagination" data-aos="fade-up">
           {{ $products->links() }}
         </div>
       @endif

     </div>
   </section><!-- /Portfolio Section -->

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Portfolio filtering with smooth animations
    const filters = document.querySelectorAll('.cel-portfolio-filter');
    const items = document.querySelectorAll('.cel-portfolio-item');
    const grid = document.getElementById('celPortfolioGrid');
    const loading = document.getElementById('celPortfolioLoading');

    filters.forEach(filter => {
        filter.addEventListener('click', function() {
            // Show loading
            loading.classList.add('active');
            grid.style.opacity = '0.5';

            setTimeout(() => {
                // Remove active class from all filters
                filters.forEach(f => f.classList.remove('cel-filter-active'));
                
                // Add active class to clicked filter
                this.classList.add('cel-filter-active');
                
                const filterValue = this.getAttribute('data-filter');
                
                // Filter items
                let visibleItems = 0;
                items.forEach(item => {
                    if (filterValue === '*' || item.classList.contains(filterValue.substring(1))) {
                        item.style.display = 'block';
                        item.classList.add('cel-zoom-in');
                        visibleItems++;
                        
                        // Remove animation class after animation completes
                        setTimeout(() => {
                            item.classList.remove('cel-zoom-in');
                        }, 400);
                    } else {
                        item.style.display = 'none';
                    }
                });

                // Hide loading
                loading.classList.remove('active');
                grid.style.opacity = '1';

                // Update URL without page reload
                const url = new URL(window.location);
                if (filterValue === '*') {
                    url.searchParams.delete('category');
                } else {
                    url.searchParams.set('category', filterValue.substring(1).replace('filter-', ''));
                }
                window.history.pushState({}, '', url);

            }, 300);
        });
    });

    // Initialize GLightbox if available
    if (typeof GLightbox !== 'undefined') {
        const lightbox = GLightbox({
            selector: '.glightbox'
        });
    }

    // Lazy loading for images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[loading="lazy"]').forEach((img) => {
            imageObserver.observe(img);
        });
    }
});
</script>

@endsection
@extends('layouts.secondary')

@section('content')

<style>
/* Modern Portfolio Styles - Enhanced without conflicts */
.portfolio-section-modern {
    position: relative;
}

.page-title-enhanced {
    background: linear-gradient(135deg, rgba(11, 66, 153, 0.85) 0%, rgba(252, 254, 255, 0.9) 100%), 
                url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    padding: 120px 0 70px;
    position: relative;
    overflow: hidden;
    min-height: 400px;
    display: flex;
    align-items: center;
}

.page-title-enhanced::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.4);
}

.page-title-enhanced .container {
    position: relative;
    z-index: 2;
    text-align: center;
}

.page-title-enhanced h1 {
    font-size: 3.5rem;
    font-weight: 800;
    color: white;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    letter-spacing: -0.5px;
}

.page-title-enhanced .breadcrumbs-enhanced ol {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
    font-size: 1rem;
    justify-content: center;
    align-items: center;
}

.page-title-enhanced .breadcrumbs-enhanced li {
    margin-right: 0.75rem;
}

.page-title-enhanced .breadcrumbs-enhanced li:not(:last-child)::after {
    content: '›';
    margin-left: 0.75rem;
    color: #e2e8f0;
    font-weight: 300;
    font-size: 1.2rem;
}

.page-title-enhanced .breadcrumbs-enhanced a {
    color: #e2e8f0;
    text-decoration: none;
    transition: all 0.3s ease;
    font-weight: 500;
}

.page-title-enhanced .breadcrumbs-enhanced a:hover {
    color: white;
    transform: translateY(-1px);
}

.page-title-enhanced .breadcrumbs-enhanced .current {
    color: white;
    font-weight: 600;
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
}

/* Enhanced Portfolio Filters */
.portfolio-filters-enhanced {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 0.75rem;
    margin-bottom: 3rem;
    list-style: none;
    padding: 0;
}

.portfolio-filters-enhanced li {
    padding: 0.75rem 1.5rem;
    background: white;
    border: 2px solid #e2e8f0;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
    color: #64748b;
    margin: 0.25rem;
}

.portfolio-filters-enhanced li:hover {
    border-color: #3b82f6;
    color: #3b82f6;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15);
}

.portfolio-filters-enhanced li.filter-active {
    background: #3b82f6;
    border-color: #3b82f6;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(59, 130, 246, 0.3);
}

/* Modern Portfolio Grid */
.portfolio-grid-modern {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.portfolio-item-modern {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 
                0 2px 4px -1px rgba(0, 0, 0, 0.06);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
}

.portfolio-item-modern:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

.portfolio-img-modern {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.portfolio-item-modern:hover .portfolio-img-modern {
    transform: scale(1.05);
}

.portfolio-info-modern {
    padding: 1.5rem;
    position: relative;
    background: white;
}

.portfolio-info-modern h4 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 0.75rem;
    color: #1e293b;
    line-height: 1.3;
}

.portfolio-info-modern p {
    color: #64748b;
    margin-bottom: 1.25rem;
    line-height: 1.6;
    font-size: 0.95rem;
}

.portfolio-actions-modern {
    display: flex;
    gap: 0.75rem;
    align-items: center;
}

.preview-link-enhanced,
.details-link-enhanced {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    background: #f8fafc;
    border-radius: 12px;
    color: #475569;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 1px solid #e2e8f0;
}

.preview-link-enhanced:hover,
.details-link-enhanced:hover {
    background: #3b82f6;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
    border-color: #3b82f6;
}

/* Empty State Enhancement */
.empty-state-modern {
    text-align: center;
    padding: 4rem 2rem;
    color: #64748b;
}

.empty-state-modern i {
    font-size: 4rem;
    margin-bottom: 1rem;
    color: #cbd5e0;
    opacity: 0.5;
}

.empty-state-modern p {
    font-size: 1.1rem;
    margin: 0;
}

/* Enhanced Pagination */
.pagination-modern {
    display: flex;
    justify-content: center;
    margin-top: 4rem;
}

.pagination-modern .pagination {
    gap: 0.5rem;
}

.pagination-modern .page-link {
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    color: #475569;
    padding: 0.75rem 1rem;
    transition: all 0.3s ease;
    font-weight: 500;
}

.pagination-modern .page-link:hover {
    background: #3b82f6;
    border-color: #3b82f6;
    color: white;
    transform: translateY(-1px);
}

.pagination-modern .page-item.active .page-link {
    background: #3b82f6;
    border-color: #3b82f6;
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
}

/* Loading Animation */
.portfolio-loading {
    display: none;
    text-align: center;
    padding: 2rem;
    color: #64748b;
}

.portfolio-loading.active {
    display: block;
}

/* Responsive Design */
@media (max-width: 768px) {
    .page-title-enhanced {
        padding: 80px 0 50px;
        min-height: 300px;
        background-attachment: scroll;
    }
    
    .page-title-enhanced h1 {
        font-size: 2.5rem;
    }
    
    .portfolio-grid-modern {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .portfolio-filters-enhanced {
        gap: 0.5rem;
    }
    
    .portfolio-filters-enhanced li {
        padding: 0.6rem 1.2rem;
        font-size: 0.9rem;
    }
    
    .portfolio-img-modern {
        height: 200px;
    }
}

@media (max-width: 480px) {
    .page-title-enhanced {
        padding: 60px 0 40px;
        min-height: 250px;
    }
    
    .page-title-enhanced h1 {
        font-size: 2rem;
    }
    
    .portfolio-grid-modern {
        grid-template-columns: 1fr;
    }
    
    .portfolio-filters-enhanced {
        justify-content: flex-start;
        overflow-x: auto;
        padding-bottom: 0.5rem;
    }
    
    .portfolio-filters-enhanced li {
        flex-shrink: 0;
    }
}

/* Animation Classes */
.fade-in-up {
    animation: fadeInUp 0.6s ease-out;
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

.zoom-in {
    animation: zoomIn 0.4s ease-out;
}

@keyframes zoomIn {
    from {
        opacity: 0;
        transform: scale(0.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}
</style>

<main class="main">

   <!-- Enhanced Page Title with New Background Image -->
   <div class="page-title-enhanced" data-aos="fade-down">
     <div class="container">
       <h1>Our Portfolio</h1>
       <nav class="breadcrumbs-enhanced">
         <ol>
           <li><a href="{{ url('/') }}">Home</a></li>
           <li class="current">Portfolio</li>
         </ol>
       </nav>
     </div>
   </div><!-- End Page Title -->

   <!-- Enhanced Portfolio Section -->
   <section id="portfolio" class="portfolio section portfolio-section-modern">

     <div class="container">

       <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

         <!-- Enhanced Portfolio Filters -->
         <ul class="portfolio-filters-enhanced isotope-filters" data-aos="fade-up" data-aos-delay="100">
           {{-- "All" Filter --}}
           <li data-filter="*" class="{{ is_null($category) ? 'filter-active' : '' }}">All Projects</li>

           {{-- Dynamic Category Filters --}}
           @foreach($categories as $cat)
             <li data-filter=".filter-{{ $cat->id }}" class="{{ $category == $cat->id ? 'filter-active' : '' }}">
               {{ $cat->name }}
             </li>
           @endforeach
         </ul><!-- End Portfolio Filters -->

         <!-- Loading Indicator -->
         <div class="portfolio-loading" id="portfolioLoading">
             <div class="spinner-border text-primary" role="status">
                 <span class="visually-hidden">Loading...</span>
             </div>
             <p class="mt-2">Loading projects...</p>
         </div>

         <!-- Enhanced Portfolio Grid -->
         <div class="portfolio-grid-modern isotope-container" data-aos="fade-up" data-aos-delay="200" id="portfolioGrid">

           @forelse($products as $product)
             <div class="portfolio-item-modern isotope-item filter-{{ $product->category_id }} fade-in-up">
               
               @if(!empty($product->images) && is_array($product->images) && count($product->images) > 0)
                 <img src="{{ asset('storage/' . $product->images[0]) }}" 
                      class="portfolio-img-modern" 
                      alt="{{ $product->name }}"
                      loading="lazy">
               @else
                 <img src="{{ asset('assets/img/placeholder.jpg') }}" 
                      class="portfolio-img-modern" 
                      alt="No Image Available"
                      loading="lazy">
               @endif

               <div class="portfolio-info-modern">
                 <h4>{{ $product->name }}</h4>
                 <p>{{ Str::limit($product->description ?? 'No description available.', 120) }}</p>
                 
                 <div class="portfolio-actions-modern">
                   @if(!empty($product->images) && is_array($product->images) && count($product->images) > 0)
                     <a href="{{ asset('storage/' . $product->images[0]) }}" 
                        title="View {{ $product->name }}" 
                        data-gallery="portfolio-gallery" 
                        class="glightbox preview-link-enhanced">
                        <i class="bi bi-zoom-in"></i>
                     </a>
                   @endif
                   
                   <a href="#" 
                      title="More Details" 
                      class="details-link-enhanced">
                      <i class="bi bi-link-45deg"></i>
                   </a>
                   
                   <span class="ms-auto text-sm text-muted">
                       {{ $product->created_at->format('M Y') }}
                   </span>
                 </div>
               </div>
             </div><!-- End Portfolio Item -->
           @empty
             <div class="col-12 text-center empty-state-modern">
               <i class="bi bi-inbox"></i>
               <p>No projects found matching your criteria.</p>
               <a href="{{ url('/') }}" class="btn btn-primary mt-3">Return Home</a>
             </div>
           @endforelse

         </div><!-- End Portfolio Container -->

         {{-- Enhanced Pagination --}}
         @if($products->hasPages())
         <div class="pagination-modern" data-aos="fade-up">
             {{ $products->links() }}
         </div>
         @endif

       </div>

     </div>

   </section><!-- /Portfolio Section -->

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Portfolio filtering with smooth animations
    const filters = document.querySelectorAll('.portfolio-filters-enhanced li');
    const items = document.querySelectorAll('.portfolio-item-modern');
    const grid = document.getElementById('portfolioGrid');
    const loading = document.getElementById('portfolioLoading');

    filters.forEach(filter => {
        filter.addEventListener('click', function() {
            // Show loading
            loading.classList.add('active');
            grid.style.opacity = '0.5';

            setTimeout(() => {
                // Remove active class from all filters
                filters.forEach(f => f.classList.remove('filter-active'));
                
                // Add active class to clicked filter
                this.classList.add('filter-active');
                
                const filterValue = this.getAttribute('data-filter');
                
                // Filter items
                let visibleItems = 0;
                items.forEach(item => {
                    if (filterValue === '*' || item.classList.contains(filterValue.substring(1))) {
                        item.style.display = 'block';
                        item.classList.add('zoom-in');
                        visibleItems++;
                        
                        // Remove animation class after animation completes
                        setTimeout(() => {
                            item.classList.remove('zoom-in');
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

    // Add intersection observer for lazy loading
    if ('IntersectionObserver' in window) {
        const lazyImageObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const lazyImage = entry.target;
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.classList.remove('lazy');
                    lazyImageObserver.unobserve(lazyImage);
                }
            });
        });

        document.querySelectorAll('img[loading="lazy"]').forEach((img) => {
            lazyImageObserver.observe(img);
        });
    }
});
</script>

@endsection
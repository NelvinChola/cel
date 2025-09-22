@extends('layouts.secondary')

@section('content')

 <main class="main">

   <!-- Page Title -->
   <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/portfolio-page-title-bg.jpg);">
     <div class="container">
       <h1>Portfolio</h1>
       <nav class="breadcrumbs">
         <ol>
           <li><a href="{{ url('/') }}">Home</a></li>
           <li class="current">Portfolio</li>
         </ol>
       </nav>
     </div>
   </div><!-- End Page Title -->

   <!-- Portfolio Section -->
   <section id="portfolio" class="portfolio section">

     <div class="container">

       <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

         <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
           {{-- "All" Filter --}}
           <li data-filter="*" class="{{ is_null($category) ? 'filter-active' : '' }}">All</li>

           {{-- Dynamic Category Filters --}}
           @foreach($categories as $cat)
             {{-- Use the category ID for the filter class. The link points to the category ID. --}}
             <li data-filter=".filter-{{ $cat->id }}" class="{{ $category == $cat->id ? 'filter-active' : '' }}">
               {{ $cat->name }}
             </li>
           @endforeach
         </ul><!-- End Portfolio Filters -->

         <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

           @forelse($products as $product)
             {{-- Add the class 'filter-X' where X is the category_id --}}
             <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $product->category_id }}">
               
               @if(!empty($product->images) && is_array($product->images) && count($product->images) > 0)
                 <img src="{{ asset('storage/' . $product->images[0]) }}" class="img-fluid" alt="{{ $product->name }}">
               @else
                 <img src="{{ asset('assets/img/placeholder.jpg') }}" class="img-fluid" alt="No Image Available">
               @endif

               <div class="portfolio-info">
                 <h4>{{ $product->name }}</h4>
                 <p>{{ $product->description ?? 'No description available.' }}</p>
                 
                 @if(!empty($product->images) && is_array($product->images) && count($product->images) > 0)
                   <a href="{{ asset('storage/' . $product->images[0]) }}" title="{{ $product->name }}" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                 @endif
                 
                 <a href="#
                 {{-- {{ route('products.show', $product) }} --}}
                  "
                  title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
               </div>
             </div><!-- End Portfolio Item -->
           @empty
             <div class="col-12 text-center">
               <p>No projects found.</p>
             </div>
           @endforelse

         </div><!-- End Portfolio Container -->

         {{-- Pagination Links --}}
         <div class="mt-5" data-aos="fade-up">
             {{ $products->links() }}
         </div>

       </div>

     </div>

   </section><!-- /Portfolio Section -->

 </main>

@endsection
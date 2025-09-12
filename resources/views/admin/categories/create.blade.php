@extends('layouts.adminLayout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create New Category</h1>
        <a href="{{ route('categories.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Categories
        </a>
    </div>

    <!-- Success/Error Messages -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Please check the form below for errors.
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Category Information</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="name">Category Name *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   id="name" name="name" value="{{ old('name') }}" 
                                   placeholder="Enter category name (e.g., Web Development, Mobile Apps)" required
                                   autofocus>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">
                                Choose a descriptive name that represents the type of products in this category.
                            </small>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" name="description" rows="5"
                                      placeholder="Describe what types of products belong to this category (optional)">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">
                                This helps organize and filter products. Example: "Websites, web applications, and online platforms built with modern technologies."
                            </small>
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-plus-circle"></i> Create Category
                            </button>
                            <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sidebar with Tips -->
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tips & Best Practices</h6>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center" 
                             style="width: 80px; height: 80px;">
                            <i class="fas fa-lightbulb fa-2x text-white"></i>
                        </div>
                    </div>

                    <div class="tips-content">
                        <h6 class="font-weight-bold text-primary">
                            <i class="fas fa-check-circle"></i> Naming Tips:
                        </h6>
                        <ul class="small pl-3">
                            <li>Use clear, descriptive names</li>
                            <li>Keep it short but meaningful</li>
                            <li>Avoid special characters</li>
                            <li>Use title case (e.g., "E-Commerce Solutions")</li>
                        </ul>

                        <h6 class="font-weight-bold text-primary mt-3">
                            <i class="fas fa-check-circle"></i> Description Tips:
                        </h6>
                        <ul class="small pl-3">
                            <li>Describe the types of products</li>
                            <li>Mention technologies or platforms used</li>
                            <li>Keep it concise but informative</li>
                            <li>Think about how users will search for products</li>
                        </ul>

                        <h6 class="font-weight-bold text-primary mt-3">
                            <i class="fas fa-check-circle"></i> Examples:
                        </h6>
                        <div class="bg-light p-3 rounded small">
                            <strong>Name:</strong> POS Systems<br>
                            <strong>Description:</strong> Point of Sale systems for retail businesses, including inventory management and sales reporting.
                            <hr class="my-2">
                            <strong>Name:</strong> Mobile Applications<br>
                            <strong>Description:</strong> Native and cross-platform mobile apps for iOS and Android devices.
                        </div>

                        <div class="alert alert-info mt-3">
                            <i class="fas fa-info-circle"></i>
                            <strong>Note:</strong> You can always edit these details later from the category management page.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            {{-- <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Categories Overview</h6>
                </div>
                <div class="card-body">
                    @php
                        $totalCategories = App\Models\Category::count();
                        $categoriesWithProducts = App\Models\Category::has('products')->count();
                    @endphp
                    
                    <div class="row text-center">
                        <div class="col-6">
                            <div class="border-right pr-3">
                                <div class="h5 font-weight-bold text-primary mb-0">{{ $totalCategories }}</div>
                                <span class="small text-gray-600">Total Categories</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="pl-3">
                                <div class="h5 font-weight-bold text-success mb-0">{{ $categoriesWithProducts }}</div>
                                <span class="small text-gray-600">Active Categories</span>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="text-center">
                        <a href="{{ route('categories.index') }}" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-list"></i> View All Categories
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection

@section('scripts')
<script>
// Auto-resize textarea as user types
document.getElementById('description').addEventListener('input', function() {
    this.style.height = 'auto';
    this.style.height = (this.scrollHeight) + 'px';
});

// Focus on name field when page loads
document.getElementById('name').focus();
</script>
@endsection
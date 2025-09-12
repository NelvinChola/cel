@extends('layouts.adminLayout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Category</h1>
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
                    <form action="{{ route('categories.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="name">Category Name *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   id="name" name="name" value="{{ old('name', $category->name) }}" 
                                   placeholder="Enter category name" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" name="description" rows="5"
                                      placeholder="Enter category description (optional)">{{ old('description', $category->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">
                                Describe what types of products belong to this category.
                            </small>
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Category
                            </button>
                            <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sidebar with Category Info -->
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Category Details</h6>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center" 
                             style="width: 100px; height: 100px;">
                            <i class="fas fa-tag fa-2x text-white"></i>
                        </div>
                    </div>

                    <div class="category-info">
                        <h5 class="text-center">{{ $category->name }}</h5>
                        
                        <hr>
                        
                        <div class="row">
                            <div class="col-6">
                                <strong>Products:</strong>
                            </div>
                            <div class="col-6 text-right">
                                <span class="badge badge-primary badge-pill">
                                    {{ $category->products_count ?? $category->products()->count() }}
                                </span>
                            </div>
                        </div>

                        @if($category->description)
                        <div class="mt-3">
                            <strong>Description:</strong>
                            <p class="text-muted mt-1">{{ $category->description }}</p>
                        </div>
                        @endif

                        <div class="row mt-3">
                            <div class="col-6">
                                <strong>Created:</strong>
                            </div>
                            <div class="col-6 text-right">
                                <small class="text-muted">{{ $category->created_at->format('M d, Y') }}</small>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-6">
                                <strong>Last Updated:</strong>
                            </div>
                            <div class="col-6 text-right">
                                <small class="text-muted">{{ $category->updated_at->format('M d, Y') }}</small>
                            </div>
                        </div>

                        @if($category->products_count > 0)
                        <div class="alert alert-info mt-3">
                            <i class="fas fa-info-circle"></i>
                            This category contains {{ $category->products_count }} products. 
                            Changing the category name will affect all associated products.
                        </div>
                        @endif

                        @if($category->products_count === 0)
                        <div class="alert alert-warning mt-3">
                            <i class="fas fa-exclamation-triangle"></i>
                            This category has no products yet. You can safely delete it if needed.
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
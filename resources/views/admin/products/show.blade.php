@extends('layouts.adminLayout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product Details</h1>
        <div>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                <i class="fas fa-edit fa-sm text-white-50"></i> Edit Product
            </a>
            <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Products
            </a>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-8">
            <!-- Product Images -->
            @if($product->images && count($product->images) > 0)
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Product Images</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($product->images as $image)
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset('storage/' . $image) }}" 
                                 alt="{{ $product->name }} - Image {{ $loop->iteration }}" 
                                 class="img-fluid rounded shadow-sm"
                                 style="height: 200px; width: 100%; object-fit: cover;">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            <!-- Product Information -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Product Information</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Name:</strong>
                            <p class="text-dark">{{ $product->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>Project Date:</strong>
                            <p class="text-dark">{{ $product->project_date->format('M d, Y') }}</p>
                        </div>
                    </div>

                    @if($product->description)
                    <div class="row">
                        <div class="col-12">
                            <strong>Description:</strong>
                            <p class="text-dark">{{ $product->description }}</p>
                        </div>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <strong>Client:</strong>
                            <p class="text-dark">{{ $product->client->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>Category:</strong>
                            <p class="text-dark">
                                <span class="badge badge-info">{{ $product->category->name }}</span>
                            </p>
                        </div>
                    </div>

                    @if($product->project_url)
                    <div class="row">
                        <div class="col-12">
                            <strong>Project URL:</strong>
                            <p class="text-dark">
                                <a href="{{ $product->project_url }}" target="_blank" rel="noopener noreferrer">
                                    {{ $product->project_url }}
                                </a>
                            </p>
                        </div>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <strong>Created:</strong>
                            <p class="text-muted">{{ $product->created_at->format('M d, Y \\a\\t h:i A') }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>Last Updated:</strong>
                            <p class="text-muted">{{ $product->updated_at->format('M d, Y \\a\\t h:i A') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Quick Actions</h6>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        @if($product->images && count($product->images) > 0)
                            <img src="{{ asset('storage/' . $product->images[0]) }}" 
                                 alt="{{ $product->name }}" 
                                 class="img-fluid rounded-circle shadow"
                                 style="width: 100px; height: 100px; object-fit: cover;">
                        @else
                            <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center" 
                                 style="width: 100px; height: 100px;">
                                <i class="fas fa-box fa-2x text-white"></i>
                            </div>
                        @endif
                    </div>

                    <div class="text-center">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-block mb-2">
                            <i class="fas fa-edit"></i> Edit Product
                        </a>
                        
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-block" 
                                    onclick="return confirm('Are you sure you want to delete this product? This action cannot be undone.')">
                                <i class="fas fa-trash"></i> Delete Product
                            </button>
                        </form>
                    </div>

                    <hr>

                    <div class="small text-center">
                        <strong>Image Count:</strong> 
                        <span class="badge badge-secondary">{{ count($product->images ?? []) }}</span>
                    </div>
                </div>
            </div>

            <!-- Related Info -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Related Information</h6>
                </div>
                <div class="card-body">
                    <h6 class="font-weight-bold">Client Details:</h6>
                    <p class="small mb-2">
                        <i class="fas fa-building text-gray-400"></i> 
                        {{ $product->client->name }}
                    </p>

                    <h6 class="font-weight-bold mt-3">Category Details:</h6>
                    <p class="small mb-0">
                        <i class="fas fa-tag text-gray-400"></i> 
                        {{ $product->category->name }}
                        @if($product->category->description)
                            <br><span class="text-muted">{{ Str::limit($product->category->description, 60) }}</span>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
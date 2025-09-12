@extends('layouts.adminLayout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
        <a href="{{ route('products.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Products
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
                    <h6 class="m-0 font-weight-bold text-primary">Product Information</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Product Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" value="{{ old('name', $product->name) }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="project_date">Project Date *</label>
                                    <input type="date" class="form-control @error('project_date') is-invalid @enderror" 
                                           id="project_date" name="project_date" 
                                           value="{{ old('project_date', $product->project_date->format('Y-m-d')) }}" required>
                                    @error('project_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" name="description" rows="4">{{ old('description', $product->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="client_id">Client *</label>
                                    <select class="form-control @error('client_id') is-invalid @enderror" 
                                            id="client_id" name="client_id" required>
                                        <option value="">Select Client</option>
                                        @foreach($clients as $client)
                                            <option value="{{ $client->id }}" 
                                                {{ old('client_id', $product->client_id) == $client->id ? 'selected' : '' }}>
                                                {{ $client->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('client_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_id">Category *</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" 
                                            id="category_id" name="category_id" required>
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" 
                                                {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="project_url">Project URL</label>
                            <input type="url" class="form-control @error('project_url') is-invalid @enderror" 
                                   id="project_url" name="project_url" 
                                   value="{{ old('project_url', $product->project_url) }}"
                                   placeholder="https://example.com">
                            @error('project_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Current Images -->
                        @if($product->images && count($product->images) > 0)
                        <div class="form-group">
                            <label>Current Images</label>
                            <div class="row">
                                @foreach($product->images as $image)
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="{{ asset('storage/' . $image) }}" 
                                             class="card-img-top" 
                                             style="height: 100px; object-fit: cover;">
                                        <div class="card-body p-2 text-center">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" 
                                                       id="remove_image_{{ $loop->index }}" 
                                                       name="remove_images[]" 
                                                       value="{{ $image }}">
                                                <label class="custom-control-label small text-danger" 
                                                       for="remove_image_{{ $loop->index }}">
                                                    Remove
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- New Images -->
                        <div class="form-group">
                            <label for="images">Add New Images</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('images.*') is-invalid @enderror" 
                                       id="images" name="images[]" multiple accept="image/*">
                                <label class="custom-file-label" for="images">Choose multiple files...</label>
                                @error('images.*')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <small class="form-text text-muted">You can select multiple images. Max 2MB per image.</small>
                        </div>

                        <!-- Image Preview -->
                        <div class="form-group" id="imagePreviewContainer" style="display: none;">
                            <label>New Images Preview</label>
                            <div class="row" id="imagePreviews"></div>
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Product
                            </button>
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Product Details</h6>
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

                    <div class="product-info">
                        <h5 class="text-center">{{ $product->name }}</h5>
                        
                        <hr>
                        
                        <div class="row">
                            <div class="col-6">
                                <strong>Client:</strong>
                            </div>
                            <div class="col-6 text-right">
                                <span class="badge badge-primary">{{ $product->client->name }}</span>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-6">
                                <strong>Category:</strong>
                            </div>
                            <div class="col-6 text-right">
                                <span class="badge badge-info">{{ $product->category->name }}</span>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-6">
                                <strong>Images:</strong>
                            </div>
                            <div class="col-6 text-right">
                                <span class="badge badge-secondary">{{ count($product->images ?? []) }}</span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-6">
                                <strong>Created:</strong>
                            </div>
                            <div class="col-6 text-right">
                                <small class="text-muted">{{ $product->created_at->format('M d, Y') }}</small>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-6">
                                <strong>Last Updated:</strong>
                            </div>
                            <div class="col-6 text-right">
                                <small class="text-muted">{{ $product->updated_at->format('M d, Y') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection

@section('scripts')
<script>
// Display the file names in the custom file input
document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    var files = document.getElementById("images").files;
    var fileNames = [];
    for (var i = 0; i < files.length; i++) {
        fileNames.push(files[i].name);
    }
    var nextSibling = e.target.nextElementSibling;
    nextSibling.innerText = fileNames.join(', ') || 'Choose multiple files...';
});

// Image preview functionality
document.getElementById('images').addEventListener('change', function(e) {
    const files = e.target.files;
    const previewContainer = document.getElementById('imagePreviewContainer');
    const previewsContainer = document.getElementById('imagePreviews');

    if (files.length > 0) {
        previewContainer.style.display = 'block';
        previewsContainer.innerHTML = '';

        Array.from(files).forEach((file, index) => {
            const col = document.createElement('div');
            col.className = 'col-md-3 mb-2';
            
            const card = document.createElement('div');
            card.className = 'card';
            
            const img = document.createElement('img');
            img.className = 'card-img-top';
            img.style.height = '80px';
            img.style.objectFit = 'cover';
            
            const reader = new FileReader();
            reader.onload = function(e) {
                img.src = e.target.result;
            }
            reader.readAsDataURL(file);
            
            const cardBody = document.createElement('div');
            cardBody.className = 'card-body p-1 text-center';
            
            const fileName = document.createElement('small');
            fileName.className = 'text-muted';
            fileName.textContent = file.name.length > 15 ? file.name.substring(0, 12) + '...' : file.name;
            
            cardBody.appendChild(fileName);
            card.appendChild(img);
            card.appendChild(cardBody);
            col.appendChild(card);
            previewsContainer.appendChild(col);
        });
    } else {
        previewContainer.style.display = 'none';
    }
});
</script>
@endsection
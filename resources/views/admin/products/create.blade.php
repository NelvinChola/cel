@extends('layouts.adminLayout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create New Product</h1>
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
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Product Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" value="{{ old('name') }}" required>
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
                                           value="{{ old('project_date') }}" required>
                                    @error('project_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" name="description" rows="4">{{ old('description') }}</textarea>
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
                                                {{ old('client_id') == $client->id ? 'selected' : '' }}>
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
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
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
                                   value="{{ old('project_url') }}"
                                   placeholder="https://example.com">
                            @error('project_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- New Images -->
                        <div class="form-group">
                            <label for="images">Product Images</label>
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
                            <label>Images Preview</label>
                            <div class="row" id="imagePreviews"></div>
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Create Product
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
                    <h6 class="m-0 font-weight-bold text-primary">Creating New Product</h6>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center" 
                             style="width: 100px; height: 100px;">
                            <i class="fas fa-plus fa-2x text-white"></i>
                        </div>
                    </div>

                    <div class="product-info">
                        <h5 class="text-center">New Product</h5>
                        
                        <hr>
                        
                        <p class="text-center">Fill out the form to create a new product. All fields marked with an asterisk (*) are required.</p>
                        
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i> 
                            <strong>Tip:</strong> You can add multiple images to showcase your product from different angles.
                        </div>
                        
                        <div class="alert alert-warning">
                            <i class="fas fa-exclamation-triangle"></i> 
                            <strong>Note:</strong> Make sure to set an appropriate project date as it cannot be changed easily later.
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
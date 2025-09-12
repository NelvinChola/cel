@extends('layouts.adminLayout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Client</h1>
        <a href="{{ route('clients.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Clients
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
                    <h6 class="m-0 font-weight-bold text-primary">Client Information</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="name">Client Name *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   id="name" name="name" value="{{ old('name', $client->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Current Logo Display -->
                        <div class="form-group">
                            <label>Current Logo</label>
                            <div class="current-logo-container mb-3">
                                @if($client->logo)
                                    @php
                                        $logoPath = 'storage/' . $client->logo;
                                        $fullPath = storage_path('app/public/' . $client->logo);
                                    @endphp
                                    
                                    @if(file_exists($fullPath))
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset($logoPath) }}" 
                                                 alt="{{ $client->name }} Logo" 
                                                 class="img-thumbnail mr-3" 
                                                 style="width: 100px; height: 100px; object-fit: contain;">
                                            <div>
                                                <span class="text-success"><i class="fas fa-check-circle"></i> Logo uploaded</span>
                                                <br>
                                                <small class="text-muted">{{ basename($client->logo) }}</small>
                                            </div>
                                        </div>
                                    @else
                                        <div class="alert alert-warning">
                                            <i class="fas fa-exclamation-triangle"></i> 
                                            Logo file not found in storage.
                                        </div>
                                    @endif
                                @else
                                    <div class="text-center py-3 bg-light rounded">
                                        <i class="fas fa-building fa-2x text-gray-300"></i>
                                        <p class="text-muted mt-2 mb-0">No logo uploaded</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Logo Upload -->
                        <div class="form-group">
                            <label for="logo">Update Logo</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('logo') is-invalid @enderror" 
                                       id="logo" name="logo" accept="image/*">
                                <label class="custom-file-label" for="logo">
                                    {{ $client->logo ? 'Choose new file to replace current logo' : 'Choose file...' }}
                                </label>
                                @error('logo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <small class="form-text text-muted">
                                Leave empty to keep current logo. Recommended: Square image, max 2MB
                            </small>
                        </div>

                        <!-- Logo Preview -->
                        <div class="form-group" id="logoPreviewContainer" style="display: none;">
                            <label>New Logo Preview</label>
                            <div class="border rounded p-3 text-center">
                                <img id="logoPreview" src="#" alt="Logo preview" 
                                     class="img-fluid" style="max-height: 150px; display: none;">
                                <p id="logoPreviewText" class="text-muted mb-0">Preview will appear here</p>
                            </div>
                        </div>

                        <!-- Delete Logo Option -->
                        @if($client->logo)
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remove_logo" name="remove_logo" value="1">
                                <label class="custom-control-label text-danger" for="remove_logo">
                                    Remove current logo
                                </label>
                            </div>
                            <small class="form-text text-muted">Check this to delete the current logo without uploading a new one.</small>
                        </div>
                        @endif

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Client
                            </button>
                            <a href="{{ route('clients.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sidebar with Client Info -->
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Client Details</h6>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        @if($client->logo)
                            @php
                                $logoPath = 'storage/' . $client->logo;
                                $fullPath = storage_path('app/public/' . $client->logo);
                            @endphp
                            
                            @if(file_exists($fullPath))
                                <img src="{{ asset($logoPath) }}" 
                                     alt="{{ $client->name }} Logo" 
                                     class="img-fluid rounded-circle" 
                                     style="width: 120px; height: 120px; object-fit: contain;">
                            @else
                                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center" 
                                     style="width: 120px; height: 120px;">
                                    <i class="fas fa-building fa-2x text-gray-300"></i>
                                </div>
                            @endif
                        @else
                            <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center" 
                                 style="width: 120px; height: 120px;">
                                <i class="fas fa-building fa-2x text-gray-300"></i>
                            </div>
                        @endif
                    </div>

                    <div class="client-info">
                        <h5 class="text-center">{{ $client->name }}</h5>
                        
                        <hr>
                        
                        <div class="row">
                            <div class="col-6">
                                <strong>Products:</strong>
                            </div>
                            <div class="col-6 text-right">
                                <span class="badge badge-primary badge-pill">
                                    {{ $client->products_count ?? $client->products()->count() }}
                                </span>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-6">
                                <strong>Created:</strong>
                            </div>
                            <div class="col-6 text-right">
                                <small class="text-muted">{{ $client->created_at->format('M d, Y') }}</small>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-6">
                                <strong>Last Updated:</strong>
                            </div>
                            <div class="col-6 text-right">
                                <small class="text-muted">{{ $client->updated_at->format('M d, Y') }}</small>
                            </div>
                        </div>

                        @if($client->products_count > 0)
                        <div class="alert alert-info mt-3">
                            <i class="fas fa-info-circle"></i>
                            This client has {{ $client->products_count }} products. 
                            Changing the client name will affect all associated products.
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

@section('scripts')
<script>
// Display the file name in the custom file input
document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    var fileName = document.getElementById("logo").files[0]?.name || 'Choose file...';
    var nextSibling = e.target.nextElementSibling;
    nextSibling.innerText = fileName;
});

// Logo preview functionality
document.getElementById('logo').addEventListener('change', function(e) {
    const file = e.target.files[0];
    const previewContainer = document.getElementById('logoPreviewContainer');
    const preview = document.getElementById('logoPreview');
    const previewText = document.getElementById('logoPreviewText');

    if (file) {
        previewContainer.style.display = 'block';
        previewText.style.display = 'none';
        
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(file);
    } else {
        previewContainer.style.display = 'none';
        preview.style.display = 'none';
        previewText.style.display = 'block';
    }
});

// Toggle remove logo checkbox when file is selected
document.getElementById('logo').addEventListener('change', function() {
    if (this.files.length > 0) {
        document.getElementById('remove_logo').checked = false;
    }
});

// Toggle file input when remove logo is checked
document.getElementById('remove_logo')?.addEventListener('change', function() {
    if (this.checked) {
        document.getElementById('logo').value = '';
        document.querySelector('.custom-file-label').innerText = 'Choose file...';
        document.getElementById('logoPreviewContainer').style.display = 'none';
    }
});
</script>
@endsection
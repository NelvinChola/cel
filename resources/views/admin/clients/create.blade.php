@extends('layouts.adminLayout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Client</h1>
        <a href="{{ route('clients.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Clients
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Client Information</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="name">Client Name *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="logo">Client Logo</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('logo') is-invalid @enderror" 
                                       id="logo" name="logo" accept="image/*">
                                <label class="custom-file-label" for="logo">Choose file...</label>
                                @error('logo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <small class="form-text text-muted">Recommended: Square image, max 2MB</small>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Client</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<script>
// Display the file name in the custom file input
document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    var fileName = document.getElementById("logo").files[0].name;
    var nextSibling = e.target.nextElementSibling;
    nextSibling.innerText = fileName;
});
</script>
@endsection
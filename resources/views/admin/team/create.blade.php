@extends('layouts.adminLayout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Team Member</h1>
        <a href="{{ route('team-members.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Team
        </a>
    </div>

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
                    <h6 class="m-0 font-weight-bold text-primary">Team Member Information</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('team-members.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Full Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="position">Position *</label>
                                    <input type="text" class="form-control @error('position') is-invalid @enderror" 
                                           id="position" name="position" value="{{ old('position') }}" required>
                                    @error('position')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                           id="email" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                           id="phone" name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bio">Bio/Description</label>
                            <textarea class="form-control @error('bio') is-invalid @enderror" 
                                      id="bio" name="bio" rows="4">{{ old('bio') }}</textarea>
                            @error('bio')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="photo">Profile Photo</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('photo') is-invalid @enderror" 
                                       id="photo" name="photo" accept="image/*">
                                <label class="custom-file-label" for="photo">Choose file...</label>
                                @error('photo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <small class="form-text text-muted">Recommended: Square image, max 2MB</small>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="order">Display Order</label>
                                    <input type="number" class="form-control @error('order') is-invalid @enderror" 
                                           id="order" name="order" value="{{ old('order') }}" min="0">
                                    @error('order')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="form-text text-muted">Lower numbers appear first</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" 
                                               id="is_active" name="is_active" value="1" checked>
                                        <label class="custom-control-label" for="is_active">Active Team Member</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-plus-circle"></i> Add Team Member
                            </button>
                            <a href="{{ route('team-members.index') }}" class="btn btn-secondary">
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
                            <i class="fas fa-users fa-2x text-white"></i>
                        </div>
                    </div>

                    <h6 class="font-weight-bold text-primary">
                        <i class="fas fa-lightbulb"></i> Photo Tips:
                    </h6>
                    <ul class="small pl-3">
                        <li>Use professional headshots</li>
                        <li>Square images work best</li>
                        <li>Ensure good lighting</li>
                        <li>Consistent style across team</li>
                    </ul>

                    <h6 class="font-weight-bold text-primary mt-3">
                        <i class="fas fa-lightbulb"></i> Bio Tips:
                    </h6>
                    <ul class="small pl-3">
                        <li>Keep it professional but friendly</li>
                        <li>Highlight key skills/experience</li>
                        <li>Mention years of experience</li>
                        <li>Include education/certifications</li>
                    </ul>

                    <div class="alert alert-info mt-3">
                        <i class="fas fa-info-circle"></i>
                        <strong>Note:</strong> You can always edit these details later from the team management page.
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
    var fileName = document.getElementById("photo").files[0]?.name || 'Choose file...';
    var nextSibling = e.target.nextElementSibling;
    nextSibling.innerText = fileName;
});
</script>
@endsection
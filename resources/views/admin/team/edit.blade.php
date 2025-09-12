@extends('layouts.adminLayout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Team Member</h1>
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
                    <h6 class="m-0 font-weight-bold text-primary">Edit Team Member</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('team-members.update', $teamMember->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <!-- Current Photo -->
                        @if($teamMember->photo)
                        <div class="form-group">
                            <label>Current Photo</label>
                            <div class="text-center mb-3">
                                <img src="{{ asset('storage/' . $teamMember->photo) }}" 
                                     alt="{{ $teamMember->name }}" 
                                     class="img-thumbnail"
                                     style="width: 150px; height: 150px; object-fit: cover;">
                                <div class="custom-control custom-checkbox mt-2">
                                    <input type="checkbox" class="custom-control-input" 
                                           id="remove_photo" name="remove_photo" value="1">
                                    <label class="custom-control-label text-danger" for="remove_photo">
                                        Remove current photo
                                    </label>
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Full Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" value="{{ old('name', $teamMember->name) }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="position">Position *</label>
                                    <input type="text" class="form-control @error('position') is-invalid @enderror" 
                                           id="position" name="position" value="{{ old('position', $teamMember->position) }}" required>
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
                                           id="email" name="email" value="{{ old('email', $teamMember->email) }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                           id="phone" name="phone" value="{{ old('phone', $teamMember->phone) }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bio">Bio/Description</label>
                            <textarea class="form-control @error('bio') is-invalid @enderror" 
                                      id="bio" name="bio" rows="4">{{ old('bio', $teamMember->bio) }}</textarea>
                            @error('bio')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="photo">New Profile Photo</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('photo') is-invalid @enderror" 
                                       id="photo" name="photo" accept="image/*">
                                <label class="custom-file-label" for="photo">Choose new file...</label>
                                @error('photo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <small class="form-text text-muted">Leave empty to keep current photo</small>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="order">Display Order</label>
                                    <input type="number" class="form-control @error('order') is-invalid @enderror" 
                                           id="order" name="order" value="{{ old('order', $teamMember->order) }}" min="0">
                                    @error('order')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" 
                                               id="is_active" name="is_active" value="1" 
                                               {{ old('is_active', $teamMember->is_active) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="is_active">Active Team Member</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Team Member
                            </button>
                            <a href="{{ route('team-members.index') }}" class="btn btn-secondary">
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
                    <h6 class="m-0 font-weight-bold text-primary">Team Member Details</h6>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        @if($teamMember->photo)
                            <img src="{{ asset('storage/' . $teamMember->photo) }}" 
                                 alt="{{ $teamMember->name }}" 
                                 class="img-fluid rounded-circle shadow"
                                 style="width: 100px; height: 100px; object-fit: cover;">
                        @else
                            <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center" 
                                 style="width: 100px; height: 100px;">
                                <i class="fas fa-user fa-2x text-white"></i>
                            </div>
                        @endif
                    </div>

                    <h5 class="text-center">{{ $teamMember->name }}</h5>
                    <p class="text-center text-primary">{{ $teamMember->position }}</p>

                    <hr>

                    <div class="small">
                        <strong>Created:</strong> {{ $teamMember->created_at->format('M d, Y') }}<br>
                        <strong>Last Updated:</strong> {{ $teamMember->updated_at->format('M d, Y') }}<br>
                        <strong>Status:</strong> 
                        <span class="badge badge-{{ $teamMember->is_active ? 'success' : 'secondary' }}">
                            {{ $teamMember->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </div>

                    <div class="alert alert-info mt-3">
                        <i class="fas fa-info-circle"></i>
                        Changes made here will be reflected on the public website team page.
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
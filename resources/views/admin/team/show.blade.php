@extends('layouts.adminLayout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Team Member Details</h1>
        <div>
            <a href="{{ route('team-members.edit', $teamMember->id) }}" class="btn btn-warning btn-sm">
                <i class="fas fa-edit fa-sm text-white-50"></i> Edit
            </a>
            <a href="{{ route('team-members.index') }}" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Team
            </a>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Team Member Information</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            @if($teamMember->photo)
                                <img src="{{ asset('storage/' . $teamMember->photo) }}" 
                                     alt="{{ $teamMember->name }}" 
                                     class="img-fluid rounded-circle shadow"
                                     style="width: 200px; height: 200px; object-fit: cover;">
                            @else
                                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center" 
                                     style="width: 200px; height: 200px;">
                                    <i class="fas fa-user fa-3x text-gray-400"></i>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <h3>{{ $teamMember->name }}</h3>
                            <h5 class="text-primary">{{ $teamMember->position }}</h5>
                            
                            <div class="mt-4">
                                @if($teamMember->email)
                                <p>
                                    <strong><i class="fas fa-envelope"></i> Email:</strong><br>
                                    <a href="mailto:{{ $teamMember->email }}">{{ $teamMember->email }}</a>
                                </p>
                                @endif
                                
                                @if($teamMember->phone)
                                <p>
                                    <strong><i class="fas fa-phone"></i> Phone:</strong><br>
                                    {{ $teamMember->phone }}
                                </p>
                                @endif
                                
                                <p>
                                    <strong><i class="fas fa-sort-numeric-down"></i> Display Order:</strong><br>
                                    {{ $teamMember->order }}
                                </p>
                                
                                <p>
                                    <strong><i class="fas fa-circle"></i> Status:</strong><br>
                                    <span class="badge badge-{{ $teamMember->is_active ? 'success' : 'secondary' }}">
                                        {{ $teamMember->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>

                    @if($teamMember->bio)
                    <div class="row mt-4">
                        <div class="col-12">
                            <h5 class="text-primary">Bio</h5>
                            <p class="text-dark">{{ $teamMember->bio }}</p>
                        </div>
                    </div>
                    @endif

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <strong>Created:</strong>
                            <p class="text-muted">{{ $teamMember->created_at->format('M d, Y \\a\\t h:i A') }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>Last Updated:</strong>
                            <p class="text-muted">{{ $teamMember->updated_at->format('M d, Y \\a\\t h:i A') }}</p>
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
                <div class="card-body text-center">
                    <a href="{{ route('team-members.edit', $teamMember->id) }}" class="btn btn-primary btn-block mb-2">
                        <i class="fas fa-edit"></i> Edit Team Member
                    </a>
                    
                    <form action="{{ route('team-members.destroy', $teamMember->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-block" 
                                onclick="return confirm('Are you sure you want to delete this team member? This action cannot be undone.')">
                            <i class="fas fa-trash"></i> Delete Team Member
                        </button>
                    </form>

                    <hr>

                    <div class="text-center">
                        <a href="{{ route('team-members.create') }}" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-plus"></i> Add Another Member
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
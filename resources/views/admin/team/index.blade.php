@extends('layouts.adminLayout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Team Management</h1>
        <a href="{{ route('team-members.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Add Team Member
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Team Members</h6>
                </div>
                <div class="card-body">
                    @if($teamMembers->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Order</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($teamMembers as $member)
                                    <tr>
                                        <td class="text-center">
                                            @if($member->photo)
                                                <img src="{{ asset('storage/' . $member->photo) }}" 
                                                     alt="{{ $member->name }}" 
                                                     class="img-thumbnail" 
                                                     style="width: 60px; height: 60px; object-fit: cover;">
                                            @else
                                                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center" 
                                                     style="width: 60px; height: 60px;">
                                                    <i class="fas fa-user text-gray-400"></i>
                                                </div>
                                            @endif
                                        </td>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->position }}</td>
                                        <td>{{ $member->email ?? 'N/A' }}</td>
                                        <td>
                                            <span class="badge badge-{{ $member->is_active ? 'success' : 'secondary' }}">
                                                {{ $member->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>{{ $member->order }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('team-members.show', $member->id) }}" 
                                                   class="btn btn-info btn-sm" title="View Details">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('team-members.edit', $member->id) }}" 
                                                   class="btn btn-warning btn-sm" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('team-members.destroy', $member->id) }}" 
                                                      method="POST" class="d-inline"
                                                      onsubmit="return confirm('Are you sure you want to delete this team member? This action cannot be undone.');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-users fa-4x text-gray-300 mb-3"></i>
                            <h4 class="text-gray-500">No Team Members Found</h4>
                            <p class="text-gray-500">Get started by adding your first team member.</p>
                            <a href="{{ route('team-members.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Add First Team Member
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "order": [[5, "asc"]], // Sort by order ascending
            "columnDefs": [
                { "orderable": false, "targets": [0, 6] } // Disable sorting for photo and actions columns
            ]
        });
    });
</script>
@endsection
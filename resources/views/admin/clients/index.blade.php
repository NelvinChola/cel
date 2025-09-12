@extends('layouts.adminLayout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Clients Management</h1>
        <a href="{{ route('clients.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Add New Client
        </a>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{ session('error') }}
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
                    <h6 class="m-0 font-weight-bold text-primary">All Clients</h6>
                </div>
                <div class="card-body">
                    @if($clients->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Logo</th>
                                        <th>Name</th>
                                        <th>Products Count</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clients as $client)
                                    <tr>
                                        <td class="text-center">
                                            @if($client->logo)
                                                <img src="{{ asset('storage/' . $client->logo) }}" 
                                                     alt="{{ $client->name }} Logo" 
                                                     class="img-thumbnail" 
                                                     style="width: 60px; height: 60px; object-fit: contain;">
                                            @else
                                                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center" 
                                                     style="width: 60px; height: 60px;">
                                                    <i class="fas fa-building text-gray-400"></i>
                                                </div>
                                            @endif
                                        </td>
                                        <td>{{ $client->name }}</td>
                                        <td>
                                            <span class="badge badge-primary badge-pill">
                                                {{ $client->products_count ?? $client->products()->count() }}
                                            </span>
                                        </td>
                                        <td>{{ $client->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                {{-- <a href="{{ route('clients.show', $client->id) }}" 
                                                   class="btn btn-info btn-sm" 
                                                   title="View Details">
                                                    <i class="fas fa-eye"></i>
                                                </a> --}}
                                                <a href="{{ route('clients.edit', $client->id) }}" 
                                                   class="btn btn-warning btn-sm" 
                                                   title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('clients.destroy', $client->id) }}" 
                                                      method="POST" 
                                                      class="d-inline"
                                                      onsubmit="return confirm('Are you sure you want to delete this client? This action cannot be undone.');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                            class="btn btn-danger btn-sm" 
                                                            title="Delete">
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
                            <i class="fas fa-building fa-4x text-gray-300 mb-3"></i>
                            <h4 class="text-gray-500">No Clients Found</h4>
                            <p class="text-gray-500">Get started by adding your first client.</p>
                            <a href="{{ route('clients.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Add First Client
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
<!-- Page level plugins -->
<script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "order": [[3, "desc"]], // Sort by Created At descending
            "columnDefs": [
                { "orderable": false, "targets": [0, 4] } // Disable sorting for logo and actions columns
            ]
        });
    });
</script>
@endsection
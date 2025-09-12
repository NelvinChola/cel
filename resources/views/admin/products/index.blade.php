@extends('layouts.adminLayout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Products Management</h1>
        <a href="{{ route('products.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Add New Product
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

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Products</h6>
                </div>
                <div class="card-body">
                    @if($products->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Client</th>
                                        <th>Category</th>
                                        <th>Project Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td class="text-center">
                                            @if($product->images && count($product->images) > 0)
                                                <img src="{{ asset('storage/' . $product->images[0]) }}" 
                                                     alt="{{ $product->name }}" 
                                                     class="img-thumbnail" 
                                                     style="width: 60px; height: 60px; object-fit: cover;">
                                            @else
                                                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center" 
                                                     style="width: 60px; height: 60px;">
                                                    <i class="fas fa-image text-gray-400"></i>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            <strong>{{ $product->name }}</strong>
                                            @if($product->description)
                                                <br><small class="text-muted">{{ Str::limit($product->description, 50) }}</small>
                                            @endif
                                        </td>
                                        <td>{{ $product->client->name }}</td>
                                        <td>
                                            <span class="badge badge-info">{{ $product->category->name }}</span>
                                        </td>
                                        <td>{{ $product->project_date->format('M d, Y') }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('products.show', $product->id) }}" 
                                                   class="btn btn-info btn-sm" title="View Details">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('products.edit', $product->id) }}" 
                                                   class="btn btn-warning btn-sm" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('products.destroy', $product->id) }}" 
                                                      method="POST" class="d-inline"
                                                      onsubmit="return confirm('Are you sure you want to delete this product? This action cannot be undone.');">
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
                            <i class="fas fa-box-open fa-4x text-gray-300 mb-3"></i>
                            <h4 class="text-gray-500">No Products Found</h4>
                            <p class="text-gray-500">Get started by adding your first product.</p>
                            <a href="{{ route('products.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Add First Product
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
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "order": [[4, "desc"]], // Sort by Project Date descending
            "columnDefs": [
                { "orderable": false, "targets": [0, 5] } // Disable sorting for image and actions columns
            ]
        });
    });
</script>
@endsection
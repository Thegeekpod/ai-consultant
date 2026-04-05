@extends('layouts.admin')

@section('title', 'Blog Category Management')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-md-6">
                <h1 class="h3 mb-0">Blog Category Management</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('admin.blog-categories.create') }}" class="btn btn-primary d-inline-flex align-items-center">
                    <i class="fa fa-plus me-2"></i> Add Category
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th class="border-0">Name</th>
                                <th class="border-0">Slug</th>
                                <th class="border-0 text-center">Status</th>
                                <th class="border-0 text-center">Posts Count</th>
                                <th class="border-0">Created At</th>
                                <th class="border-0 text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categories as $category)
                                <tr>
                                    <td class="fw-bold text-dark">{{ $category->name }}</td>
                                    <td><code class="bg-light text-primary px-2 py-1 rounded small">{{ $category->slug }}</code></td>
                                    <td class="text-center">
                                        @if($category->is_active)
                                            <span class="badge bg-success rounded-pill px-3">Active</span>
                                        @else
                                            <span class="badge bg-danger rounded-pill px-3">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-primary rounded-pill">{{ $category->blogs()->count() }}</span>
                                    </td>
                                    <td class="text-muted small">{{ $category->created_at->format('M d, Y') }}</td>
                                    <td class="text-end">
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="{{ route('admin.blog-categories.edit', $category) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.blog-categories.destroy', $category) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this category?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">No categories found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

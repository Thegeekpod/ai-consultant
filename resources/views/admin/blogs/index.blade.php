@extends('layouts.admin')

@section('title', 'Blog Management')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-md-6">
                <h1 class="h3 mb-0">Blog Management</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary d-inline-flex align-items-center">
                    <i class="fa fa-plus me-2"></i> Add Blog Post
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th class="border-0">Image</th>
                                <th class="border-0">Title</th>
                                <th class="border-0">Category</th>
                                <th class="border-0">Slug</th>
                                <th class="border-0 text-center">Status</th>
                                <th class="border-0">Created At</th>
                                <th class="border-0 text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($blogs as $blog)
                                <tr>
                                    <td>
                                        @if($blog->image)
                                            <img src="{{ asset($blog->image) }}" alt="image" class="rounded shadow-sm" style="width: 50px; height: 50px; object-fit: cover;">
                                        @else
                                            <div class="bg-light d-flex align-items-center justify-content-center rounded shadow-sm" style="width: 50px; height: 50px;">
                                                <i class="fa fa-image text-muted"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="fw-bold text-dark">{{ $blog->title }}</td>
                                    <td>
                                        @if($blog->category)
                                            <span class="badge bg-soft-info text-info border border-info">{{ $blog->category->name }}</span>
                                        @else
                                            <span class="text-muted small italic">Uncategorized</span>
                                        @endif
                                    </td>
                                    <td><code class="bg-light text-primary px-2 py-1 rounded small">{{ $blog->slug }}</code></td>
                                    <td class="text-center">
                                        @if($blog->is_active)
                                            <span class="badge bg-success rounded-pill px-3">Active</span>
                                        @else
                                            <span class="badge bg-danger rounded-pill px-3">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-muted small">{{ $blog->created_at->format('M d, Y') }}</td>
                                    <td class="text-end">
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this blog?')">
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
                                    <td colspan="7" class="text-center py-5 text-muted">No blog posts found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

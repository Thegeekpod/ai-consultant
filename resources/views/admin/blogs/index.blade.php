@extends('layouts.admin')

@section('title', 'Manage Blogs')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title">Blog Posts</h4>
                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary btn-sm">Add New</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Read Time</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>
                                            @if ($blog->image)
                                                <img src="{{ asset($blog->image) }}" alt="image"
                                                    style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->date }}</td>
                                        <td>{{ $blog->read_time }}</td>
                                        <td>
                                            @if ($blog->status)
                                                <label class="badge badge-success">Active</label>
                                            @else
                                                <label class="badge badge-danger">Inactive</label>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                                class="btn btn-info btn-sm btn-icon-text">Edit</a>
                                            <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm btn-icon-text"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

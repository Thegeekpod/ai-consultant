@extends('layouts.admin')

@section('title', 'Manage Testimonials')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title">Testimonials List</h4>
                        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary btn-sm">Add New</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Quote</th>
                                    <th>Reason</th>
                                    <th>Rating</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td>
                                            @if ($testimonial->image)
                                                <img src="{{ asset($testimonial->image) }}" alt="image"
                                                    style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>{{ $testimonial->name }}</td>
                                        <td>{{ $testimonial->designation }}</td>
                                        <td>{{ Str::limit($testimonial->quote, 50) }}</td>
                                        <td>{{ $testimonial->reason ?? '-' }}</td>
                                        <td>{{ $testimonial->rating ?? '-' }}</td>
                                        <td>
                                            <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}"
                                                class="btn btn-info btn-sm btn-icon-text">Edit</a>
                                            <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}"
                                                method="POST" class="d-inline">
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

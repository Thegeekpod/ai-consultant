@extends('layouts.admin')

@section('title', 'Edit Testimonial')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Testimonial</h4>
                    <form class="forms-sample" action="{{ route('admin.testimonials.update', $testimonial->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $testimonial->name }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" class="form-control" name="designation"
                                value="{{ $testimonial->designation }}" required>
                        </div>
                        <div class="form-group">
                            <label>Current Image</label>
                            @if ($testimonial->image)
                                <div class="mb-2">
                                    <img src="{{ asset($testimonial->image) }}" alt="current image"
                                        style="width: 100px; border-radius: 50%;">
                                </div>
                            @else
                                <p>No image uploaded</p>
                            @endif
                            <label>Upload New Image</label>
                            <input type="file" class="form-control file-upload-info" name="image">
                        </div>
                        <div class="form-group">
                            <label>Quote</label>
                            <textarea class="form-control" name="quote" rows="4" required>{{ $testimonial->quote }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Reason (Optional)</label>
                            <input type="text" class="form-control" name="reason" value="{{ $testimonial->reason }}"
                                placeholder="e.g., Premium Support">
                        </div>
                        <div class="form-group">
                            <label>Rating (0-5)</label>
                            <input type="number" class="form-control" name="rating" min="0" max="5"
                                step="0.1" value="{{ $testimonial->rating ?? 5.0 }}">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

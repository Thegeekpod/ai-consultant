@extends('layouts.admin')

@section('title', 'Edit Blog')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Blog Post</h4>
                    <form class="forms-sample" action="{{ route('admin.blogs.update', $blog->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $blog->title }}" required>
                        </div>
                        <div class="form-group">
                            <label>Current Image</label>
                            @if ($blog->image)
                                <div class="mb-2">
                                    <img src="{{ asset($blog->image) }}" alt="current image"
                                        style="width: 150px; border-radius: 4px;">
                                </div>
                            @else
                                <p>No image uploaded</p>
                            @endif
                            <label>Upload New Image</label>
                            <input type="file" class="form-control file-upload-info" name="image">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="text" class="form-control" name="date" value="{{ $blog->date }}" required>
                        </div>
                        <div class="form-group">
                            <label>Read Time</label>
                            <input type="text" class="form-control" name="read_time" value="{{ $blog->read_time }}"
                                required>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="status" value="1"
                                        {{ $blog->status ? 'checked' : '' }}> Status (Active)
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

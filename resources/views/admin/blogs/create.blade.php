@extends('layouts.admin')

@section('title', 'Create Blog')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create New Blog Post</h4>
                    <form class="forms-sample" action="{{ route('admin.blogs.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control file-upload-info" name="image">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="text" class="form-control" name="date" placeholder="e.g., Oct 23, 2024"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Read Time</label>
                            <input type="text" class="form-control" name="read_time" placeholder="e.g., 5 min read"
                                required>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="status" value="1" checked>
                                    Status (Active)
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

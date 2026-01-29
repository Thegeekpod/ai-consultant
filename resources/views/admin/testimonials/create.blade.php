@extends('layouts.admin')

@section('title', 'Create Testimonial')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create New Testimonial</h4>
                    <form class="forms-sample" action="{{ route('admin.testimonials.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" class="form-control" name="designation" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control file-upload-info" name="image">
                        </div>
                        <div class="form-group">
                            <label>Quote</label>
                            <textarea class="form-control" name="quote" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Reason (Optional)</label>
                            <input type="text" class="form-control" name="reason" placeholder="e.g., Premium Support">
                        </div>
                        <div class="form-group">
                            <label>Rating (0-5)</label>
                            <input type="number" class="form-control" name="rating" min="0" max="5"
                                step="0.1" value="5.0">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

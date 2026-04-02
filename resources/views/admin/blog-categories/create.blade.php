@extends('layouts.admin')

@section('title', 'Add Blog Category')

@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="card-title mb-0">Add New Blog Category</h4>
                        <a href="{{ route('admin.blog-categories.index') }}" class="btn btn-secondary btn-sm">
                            <i class="ti-arrow-left"></i> Back to List
                        </a>
                    </div>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form class="forms-sample" action="{{ route('admin.blog-categories.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter Category Name" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="5" placeholder="Enter Description">{{ old('description') }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label>Status</label>
                            <div class="form-check form-check-primary">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="is_active" value="1" {{ old('is_active', '1') == '1' ? 'checked' : '' }}>
                                    Active
                                </label>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary mr-2">Create Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

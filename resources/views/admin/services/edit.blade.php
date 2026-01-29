@extends('layouts.admin')

@section('title', 'Edit Service')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Service/Feature</h4>
                    <form class="forms-sample" action="{{ route('admin.services.update', $service->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $service->title }}" required>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" name="type">
                                <option value="capability" {{ $service->type == 'capability' ? 'selected' : '' }}>Capability
                                </option>
                                <option value="feature" {{ $service->type == 'feature' ? 'selected' : '' }}>Feature</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Icon Class</label>
                            <input type="text" class="form-control" name="icon" value="{{ $service->icon }}" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="4">{{ $service->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="status" value="1"
                                        {{ $service->status ? 'checked' : '' }}> Status (Active)
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <a href="{{ route('admin.services.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin')

@section('title', 'Manage Services & Features')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title">Services & Features List</h4>
                        <a href="{{ route('admin.services.create') }}" class="btn btn-primary btn-sm">Add New</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Icon</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td><i class="{{ $service->icon }}"></i></td>
                                        <td>{{ $service->title }}</td>
                                        <td>
                                            @if ($service->type == 'capability')
                                                <label class="badge badge-info">Capability</label>
                                            @else
                                                <label class="badge badge-success">Feature</label>
                                            @endif
                                        </td>
                                        <td>{{ Str::limit($service->description, 50) }}</td>
                                        <td>
                                            <a href="{{ route('admin.services.edit', $service->id) }}"
                                                class="btn btn-info btn-sm btn-icon-text">Edit</a>
                                            <form action="{{ route('admin.services.destroy', $service->id) }}"
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

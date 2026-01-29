@extends('layouts.admin')

@section('title', 'Manage Plans')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title">Pricing Plans</h4>
                        <a href="{{ route('admin.plans.create') }}" class="btn btn-primary btn-sm">Add New</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Type</th>
                                    <th>Features Count</th>
                                    <th>Popular</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($plans as $plan)
                                    <tr>
                                        <td>{{ $plan->name }}</td>
                                        <td>{{ $plan->price }}</td>
                                        <td>
                                            @if ($plan->type == 'monthly')
                                                <label class="badge badge-info">Monthly</label>
                                            @else
                                                <label class="badge badge-primary">Yearly</label>
                                            @endif
                                        </td>
                                        <td>{{ count(json_decode($plan->features) ?? []) }}</td>
                                        <td>
                                            @if ($plan->is_popular)
                                                <label class="badge badge-warning">Yes</label>
                                            @else
                                                No
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.plans.edit', $plan->id) }}"
                                                class="btn btn-info btn-sm btn-icon-text">Edit</a>
                                            <form action="{{ route('admin.plans.destroy', $plan->id) }}" method="POST"
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

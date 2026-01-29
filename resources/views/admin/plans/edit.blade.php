@extends('layouts.admin')

@section('title', 'Edit Plan')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Plan</h4>
                    <form class="forms-sample" action="{{ route('admin.plans.update', $plan->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        @php
                            $features = json_decode($plan->features) ?? [];
                            $featuresText = implode("\n", $features);
                        @endphp

                        <div class="form-group">
                            <label>Plan Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $plan->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $plan->price }}" required>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" name="type">
                                <option value="monthly" {{ $plan->type == 'monthly' ? 'selected' : '' }}>Monthly</option>
                                <option value="yearly" {{ $plan->type == 'yearly' ? 'selected' : '' }}>Yearly</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="3">{{ $plan->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Features (One per line)</label>
                            <textarea class="form-control" name="features" rows="6" required>{{ $featuresText }}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="is_popular" value="1"
                                        {{ $plan->is_popular ? 'checked' : '' }}> Is Popular?
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <a href="{{ route('admin.plans.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

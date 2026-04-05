@extends('layouts.admin')

@section('title', 'Create Menu')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-md-6">
                <h1 class="h3 mb-0">Create New Menu</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">
                    <i class="fa fa-arrow-left"></i> Back to List
                </a>
            </div>
        </div>

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.menus.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                    id="slug" name="slug" value="{{ old('slug') }}"
                                    placeholder="Auto-generated if left empty">
                                @error('slug')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="text-muted">Leave empty to auto-generate from name</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="url" class="form-label">URL</label>
                                <input type="text" class="form-control @error('url') is-invalid @enderror" id="url"
                                    name="url" value="{{ old('url') }}" placeholder="e.g., /about or #">
                                @error('url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="parent_id" class="form-label">Parent Menu</label>
                                <select class="form-select @error('parent_id') is-invalid @enderror" id="parent_id"
                                    name="parent_id">
                                    <option value="">-- No Parent (Top Level) --</option>
                                    @foreach ($allMenus as $parentMenu)
                                        <option value="{{ $parentMenu->id }}"
                                            {{ old('parent_id') == $parentMenu->id ? 'selected' : '' }}>
                                            {{ str_repeat('— ', $parentMenu->parent_id ? 1 : 0) }}{{ $parentMenu->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('parent_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="icon" class="form-label">Icon</label>
                                @php
                                    $icons = [
                                        '' => 'None',
                                        'fal fa-analytics' => 'Analytics',
                                        'fal fa-arrow-right' => 'Arrow Right',
                                        'fal fa-boxes' => 'Boxes',
                                        'fal fa-brain' => 'Brain',
                                        'fal fa-building' => 'Building',
                                        'fal fa-bullseye' => 'Bullseye',
                                        'fal fa-chalkboard' => 'Chalkboard',
                                        'fal fa-chalkboard-teacher' => 'Chalkboard Teacher',
                                        'fal fa-chart-area' => 'Chart Area',
                                        'fal fa-chart-line' => 'Chart Line',
                                        'fal fa-clipboard-check' => 'Clipboard Check',
                                        'fal fa-code' => 'Code',
                                        'fal fa-cogs' => 'Cogs',
                                        'fal fa-comments' => 'Comments',
                                        'fal fa-exclamation-triangle' => 'Exclamation Triangle',
                                        'fal fa-eye' => 'Eye',
                                        'fal fa-graduation-cap' => 'Graduation Cap',
                                        'fal fa-heartbeat' => 'Heartbeat',
                                        'fal fa-industry' => 'Industry',
                                        'fal fa-industry-alt' => 'Industry Alt',
                                        'fal fa-laptop-code' => 'Laptop Code',
                                        'fal fa-life-ring' => 'Life Ring',
                                        'fal fa-lock' => 'Lock',
                                        'fal fa-map-marked-alt' => 'Map',
                                        'fal fa-microchip' => 'Microchip',
                                        'fal fa-microphone' => 'Microphone',
                                        'fal fa-plug' => 'Plug',
                                        'fal fa-project-diagram' => 'Project Diagram',
                                        'fal fa-robot' => 'Robot',
                                        'fal fa-rocket' => 'Rocket',
                                        'fal fa-search-plus' => 'Search Plus',
                                        'fal fa-shield' => 'Shield',
                                        'fal fa-shield-check' => 'Shield Check',
                                        'fal fa-sliders-h' => 'Sliders',
                                        'fal fa-shopping-cart' => 'Shopping Cart',
                                        'fal fa-stethoscopes' => 'Stethoscopes',
                                        'fal fa-thumbs-up' => 'Thumbs Up',
                                        'fal fa-university' => 'University',
                                        'fal fa-user-friends' => 'User Friends',
                                        'fal fa-user-headset' => 'User Headset',
                                    ];
                                @endphp
                                <select class="form-select @error('icon') is-invalid @enderror" id="icon" name="icon">
                                    @foreach($icons as $class => $name)
                                        <option value="{{ $class }}" {{ old('icon') == $class ? 'selected' : '' }}>
                                            {{ $name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('icon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="menu_type" class="form-label">Menu Type <span
                                        class="text-danger">*</span></label>
                                <select class="form-select @error('menu_type') is-invalid @enderror" id="menu_type"
                                    name="menu_type" required>
                                    <option value="main" {{ old('menu_type') == 'main' ? 'selected' : '' }}>Main</option>
                                    <option value="services" {{ old('menu_type') == 'services' ? 'selected' : '' }}>
                                        Services</option>
                                    <option value="solutions" {{ old('menu_type') == 'solutions' ? 'selected' : '' }}>
                                        Solutions</option>
                                    <option value="industries" {{ old('menu_type') == 'industries' ? 'selected' : '' }}>
                                        Industries</option>
                                </select>
                                @error('menu_type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="order" class="form-label">Order</label>
                                <input type="number" class="form-control @error('order') is-invalid @enderror"
                                    id="order" name="order" value="{{ old('order', 0) }}" min="0">
                                @error('order')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="text-muted">Leave 0 to auto-assign</small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label d-block">Status</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active"
                                        value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active">
                                        Active
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                            rows="3" placeholder="Short description for mega menu">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save"></i> Create Menu
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Auto-generate slug from name
        document.getElementById('name').addEventListener('input', function() {
            const slugInput = document.getElementById('slug');
            if (!slugInput.value || slugInput.dataset.autoGenerated) {
                const slug = this.value
                    .toLowerCase()
                    .replace(/[^a-z0-9]+/g, '-')
                    .replace(/^-+|-+$/g, '');
                slugInput.value = slug;
                slugInput.dataset.autoGenerated = 'true';
            }
        });

        document.getElementById('slug').addEventListener('input', function() {
            if (this.value) {
                delete this.dataset.autoGenerated;
            }
        });
    </script>
@endsection

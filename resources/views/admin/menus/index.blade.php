@extends('layouts.admin')

@section('title', 'Menu Management')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-md-6">
                <h1 class="h3 mb-0">Menu Management</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('admin.menus.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Add New Menu
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

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
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>URL</th>
                                <th>Status</th>
                                <th>Children</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($menus as $menu)
                                <tr>
                                    <td>{{ $menu->order }}</td>
                                    <td>
                                        @if ($menu->icon)
                                            <i class="{{ $menu->icon }}"></i>
                                        @endif
                                        <strong>{{ $menu->name }}</strong>
                                    </td>
                                    <td><span class="badge bg-info">{{ $menu->menu_type }}</span></td>
                                    <td>
                                        @if ($menu->url)
                                            <small class="text-muted">{{ Str::limit($menu->url, 30) }}</small>
                                        @else
                                            <small class="text-muted">-</small>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($menu->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-secondary">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($menu->children->count() > 0)
                                            <span class="badge bg-primary">{{ $menu->children->count() }}</span>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.menus.edit', $menu) }}" class="btn btn-sm btn-warning">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.menus.destroy', $menu) }}" method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Are you sure you want to delete this menu item?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                @if ($menu->children->count() > 0)
                                    @foreach ($menu->children as $child)
                                        <tr class="table-secondary">
                                            <td class="ps-4">{{ $child->order }}</td>
                                            <td class="ps-4">
                                                <i class="fa fa-level-up fa-rotate-90 text-muted me-2"></i>
                                                @if ($child->icon)
                                                    <i class="{{ $child->icon }}"></i>
                                                @endif
                                                {{ $child->name }}
                                            </td>
                                            <td><span class="badge bg-secondary">{{ $child->menu_type }}</span></td>
                                            <td>
                                                @if ($child->url)
                                                    <small class="text-muted">{{ Str::limit($child->url, 30) }}</small>
                                                @else
                                                    <small class="text-muted">-</small>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($child->is_active)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-secondary">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($child->children->count() > 0)
                                                    <span class="badge bg-primary">{{ $child->children->count() }}</span>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.menus.edit', $child) }}"
                                                    class="btn btn-sm btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.menus.destroy', $child) }}" method="POST"
                                                    class="d-inline" onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                        @if ($child->children->count() > 0)
                                            @foreach ($child->children as $grandchild)
                                                <tr class="table-light">
                                                    <td class="ps-5">{{ $grandchild->order }}</td>
                                                    <td class="ps-5">
                                                        <i class="fa fa-level-up fa-rotate-90 text-muted me-2"></i>
                                                        <i class="fa fa-level-up fa-rotate-90 text-muted me-2"></i>
                                                        @if ($grandchild->icon)
                                                            <i class="{{ $grandchild->icon }}"></i>
                                                        @endif
                                                        {{ $grandchild->name }}
                                                    </td>
                                                    <td><span
                                                            class="badge bg-light text-dark">{{ $grandchild->menu_type }}</span>
                                                    </td>
                                                    <td>
                                                        @if ($grandchild->url)
                                                            <small
                                                                class="text-muted">{{ Str::limit($grandchild->url, 30) }}</small>
                                                        @else
                                                            <small class="text-muted">-</small>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($grandchild->is_active)
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-secondary">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>-</td>
                                                    <td>
                                                        <a href="{{ route('admin.menus.edit', $grandchild) }}"
                                                            class="btn btn-sm btn-warning">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('admin.menus.destroy', $grandchild) }}"
                                                            method="POST" class="d-inline"
                                                            onsubmit="return confirm('Are you sure?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4">
                                        <p class="text-muted mb-0">No menu items found.</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

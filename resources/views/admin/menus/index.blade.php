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
                <p class="text-muted"><i class="fa fa-info-circle"></i> Drag and drop the handle (<i class="fa fa-arrows-v"></i>) to reorder the menu items. Changes are saved automatically.</p>
                <div class="menu-list-wrapper mt-3">
                    @if($menus->isEmpty())
                        <div class="text-center py-4">
                            <p class="text-muted mb-0">No menu items found.</p>
                        </div>
                    @else
                        {{-- Macro for rendering recursive menu items --}}
                        <ul class="list-group sortable-list" id="main-menu-list">
                            @foreach($menus as $menu)
                                <li class="list-group-item mb-2 border rounded" data-id="{{ $menu->id }}">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <span class="handle me-3 text-muted" style="cursor: grab;"><i class="fa fa-arrows-v fs-5"></i></span>
                                            <div>
                                                @if ($menu->icon)
                                                    <i class="{{ $menu->icon }} me-1"></i>
                                                @endif
                                                <strong>{{ $menu->name }}</strong>
                                                <span class="badge bg-info ms-2">{{ $menu->menu_type }}</span>
                                                @if ($menu->is_active)
                                                    <span class="badge bg-success ms-1">Active</span>
                                                @else
                                                    <span class="badge bg-secondary ms-1">Inactive</span>
                                                @endif
                                                <div class="text-muted small mt-1">
                                                    @if ($menu->url)
                                                        <i class="fa fa-link form-text me-1"></i>{{ Str::limit($menu->url, 40) }}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('admin.menus.edit', $menu) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.menus.destroy', $menu) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this menu item?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                    @if ($menu->children->count() > 0)
                                        <ul class="list-group sortable-list mt-3 ms-4">
                                            @foreach ($menu->children as $child)
                                                <li class="list-group-item mb-2 border rounded" data-id="{{ $child->id }}">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <span class="handle me-3 text-muted" style="cursor: grab;"><i class="fa fa-arrows-v fs-5"></i></span>
                                                            <div>
                                                                @if ($child->icon)
                                                                    <i class="{{ $child->icon }} me-1"></i>
                                                                @endif
                                                                <strong>{{ $child->name }}</strong>
                                                                <span class="badge bg-secondary ms-2">{{ $child->menu_type }}</span>
                                                                @if ($child->is_active)
                                                                    <span class="badge bg-success ms-1">Active</span>
                                                                @else
                                                                    <span class="badge bg-secondary ms-1">Inactive</span>
                                                                @endif
                                                                <div class="text-muted small mt-1">
                                                                    @if ($child->url)
                                                                        <i class="fa fa-link form-text me-1"></i>{{ Str::limit($child->url, 40) }}
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex gap-2">
                                                            <a href="{{ route('admin.menus.edit', $child) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <form action="{{ route('admin.menus.destroy', $child) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    @if ($child->children->count() > 0)
                                                        <ul class="list-group sortable-list mt-3 ms-4">
                                                            @foreach ($child->children as $grandchild)
                                                                <li class="list-group-item mb-2 border rounded bg-light" data-id="{{ $grandchild->id }}">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="d-flex align-items-center">
                                                                            <span class="handle me-3 text-muted" style="cursor: grab;"><i class="fa fa-arrows-v fs-5"></i></span>
                                                                            <div>
                                                                                @if ($grandchild->icon)
                                                                                    <i class="{{ $grandchild->icon }} me-1"></i>
                                                                                @endif
                                                                                <strong>{{ $grandchild->name }}</strong>
                                                                                <span class="badge bg-dark ms-2">{{ $grandchild->menu_type }}</span>
                                                                                @if ($grandchild->is_active)
                                                                                    <span class="badge bg-success ms-1">Active</span>
                                                                                @else
                                                                                    <span class="badge bg-secondary ms-1">Inactive</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex gap-2">
                                                                            <a href="{{ route('admin.menus.edit', $grandchild) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>
                                                                            <form action="{{ route('admin.menus.destroy', $grandchild) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                                                                    <i class="fa fa-trash"></i>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- SortableJS for drag and drop -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const token = '{{ csrf_token() }}';
            
            // Function to handle saving the order
            function updateOrder(listArray) {
                fetch('{{ route('admin.menus.update-order') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': token
                    },
                    body: JSON.stringify({ items: listArray })
                })
                .then(response => response.json())
                .then(data => {
                    if(data.success) {
                        // Optional: show a small toast or notification
                        console.log('Order updated successfully!');
                    }
                })
                .catch(error => {
                    console.error('Error saving order:', error);
                    alert('An error occurred while saving the menu order.');
                });
            }

            // Initialize Sortable on all lists
            const sortables = document.querySelectorAll('.sortable-list');
            sortables.forEach(list => {
                new Sortable(list, {
                    handle: '.handle', 
                    animation: 150,
                    ghostClass: 'bg-light',
                    onEnd: function (evt) {
                        // When drag ends, we get the current state of this specific list
                        const listItems = evt.to.querySelectorAll(':scope > li');
                        const orderData = [];
                        
                        listItems.forEach((item, index) => {
                            orderData.push({
                                id: item.getAttribute('data-id'),
                                order: index + 1
                            });
                        });
                        
                        if(orderData.length > 0) {
                            updateOrder(orderData);
                        }
                    }
                });
            });
        });
    </script>
@endpush

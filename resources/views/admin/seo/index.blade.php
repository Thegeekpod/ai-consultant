@extends('layouts.admin')

@section('title', 'SEO Settings')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-md-6">
                <h1 class="h3 mb-0">SEO Settings</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('admin.seo-settings.create') }}" class="btn btn-primary d-inline-flex align-items-center">
                    <i class="fa fa-plus me-2"></i> Add SEO Setting
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th class="border-0">Page URL</th>
                                <th class="border-0">Meta Title</th>
                                <th class="border-0 text-center">Status</th>
                                <th class="border-0">Last Updated</th>
                                <th class="border-0 text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($settings as $setting)
                                <tr>
                                    <td><code class="bg-light text-primary px-2 py-1 rounded small">{{ $setting->page_url }}</code></td>
                                    <td class="text-dark">{{ Str::limit($setting->title, 50) }}</td>
                                    <td class="text-center">
                                        @if($setting->is_active)
                                            <span class="badge bg-success rounded-pill px-3">Active</span>
                                        @else
                                            <span class="badge bg-danger rounded-pill px-3">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-muted small">{{ $setting->updated_at->format('M d, Y') }}</td>
                                    <td class="text-end">
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="{{ route('admin.seo-settings.edit', $setting) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.seo-settings.destroy', $setting) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this setting?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-5 text-muted">No SEO settings found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                    {{ $settings->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin')

@section('title', 'SEO Settings')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="card-title mb-0">SEO Settings</h4>
                        <a href="{{ route('admin.seo-settings.create') }}" class="btn btn-primary btn-icon-text">
                            <i class="ti-plus btn-icon-prepend"></i>
                            Add SEO Setting
                        </a>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th>Page URL</th>
                                    <th>Meta Title</th>
                                    <th>Status</th>
                                    <th>Last Updated</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($settings as $setting)
                                    <tr>
                                        <td><code>{{ $setting->page_url }}</code></td>
                                        <td>{{ Str::limit($setting->title, 50) }}</td>
                                        <td>
                                            @if($setting->is_active)
                                                <label class="badge badge-success">Active</label>
                                            @else
                                                <label class="badge badge-danger">Inactive</label>
                                            @endif
                                        </td>
                                        <td>{{ $setting->updated_at->format('M d, Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.seo-settings.edit', $setting) }}" class="btn btn-info btn-sm">
                                                <i class="ti-pencil"></i>
                                            </a>
                                            <form action="{{ route('admin.seo-settings.destroy', $setting) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this setting?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="ti-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4">No SEO settings found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $settings->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

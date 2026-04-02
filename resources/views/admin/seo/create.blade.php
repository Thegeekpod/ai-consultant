@extends('layouts.admin')

@section('title', 'Add SEO Setting')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="card-title mb-0">Add SEO Setting</h4>
                        <a href="{{ route('admin.seo-settings.index') }}" class="btn btn-light btn-icon-text">
                            <i class="ti-arrow-left btn-icon-prepend"></i>
                            Back to List
                        </a>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="forms-sample" action="{{ route('admin.seo-settings.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group mb-3">
                                    <label for="page_url">Page URL <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="page_url" name="page_url" value="{{ old('page_url') }}" placeholder="e.g., /about or /blog/my-post" required>
                                    <small class="text-muted">Use <code>/</code> for homepage. Exact match from the URL.</small>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="title">Meta Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Enter Meta Title">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea class="form-control" name="meta_description" id="meta_description" rows="4" placeholder="Enter Meta Description">{{ old('meta_description') }}</textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="other_tags">Other Tags / Scripts</label>
                                    <textarea class="form-control" name="other_tags" id="other_tags" rows="8" placeholder="<script>...</script> or other meta tags">{{ old('other_tags') }}</textarea>
                                    <small class="text-muted">Paste your tracking scripts, custom meta tags, or any other head tags here.</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h5 class="card-title">Status</h5>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="is_active" {{ old('is_active', true) ? 'checked' : '' }}>
                                                Active (Enabled)
                                            <i class="input-helper"></i></label>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary mr-2 btn-block">Save Setting</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

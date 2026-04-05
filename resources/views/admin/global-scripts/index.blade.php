@extends('layouts.admin')

@section('title', 'Global Scripts')

@section('content')
<div class="container-fluid">
    <div class="row w-100 mx-0">
        <div class="col-12 px-0">
            <h1 class="h3 mb-4 text-gray-800">Global Scripts Management</h1>
            <p class="text-muted">Manage global tracking codes like Google Analytics, Facebook Pixel, and other custom scripts to inject into your website.</p>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <form action="{{ route('admin.global-scripts.update') }}" method="POST">
                        @csrf
                        
                        <div class="mb-4">
                            <label for="header_scripts" class="form-label fw-bold text-primary"><i class="fa fa-code me-2"></i>Header Scripts (<code>&lt;head&gt;</code>)</label>
                            <p class="small text-muted mb-2">These scripts will be printed just before the closing <code>&lt;/head&gt;</code> tag. Ideal for Google Analytics tracking codes or Meta pixels.</p>
                            <textarea name="header_scripts" id="header_scripts" rows="6" class="form-control bg-light text-dark font-monospace" placeholder="&lt;!-- Enter header tracking codes here --&gt;">{{ old('header_scripts', $script?->header_scripts ?? '') }}</textarea>
                            @error('header_scripts') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="body_scripts" class="form-label fw-bold text-success"><i class="fa fa-code me-2"></i>Body Start Scripts (<code>&lt;body&gt;</code>)</label>
                            <p class="small text-muted mb-2">These scripts will be printed immediately after the opening <code>&lt;body&gt;</code> tag. Essential for Google Tag Manager (noscript).</p>
                            <textarea name="body_scripts" id="body_scripts" rows="6" class="form-control bg-light text-dark font-monospace" placeholder="&lt;!-- Enter body tracking codes here --&gt;">{{ old('body_scripts', $script?->body_scripts ?? '') }}</textarea>
                            @error('body_scripts') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="footer_scripts" class="form-label fw-bold text-danger"><i class="fa fa-code me-2"></i>Footer Scripts (<code>&lt;/body&gt;</code>)</label>
                            <p class="small text-muted mb-2">These scripts will be printed right before the closing <code>&lt;/body&gt;</code> tag. Used for chat widgets, delayed popups, or external JS libraries.</p>
                            <textarea name="footer_scripts" id="footer_scripts" rows="6" class="form-control bg-light text-dark font-monospace" placeholder="&lt;!-- Enter footer tracking codes here --&gt;">{{ old('footer_scripts', $script?->footer_scripts ?? '') }}</textarea>
                            @error('footer_scripts') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary px-4"><i class="fa fa-save me-2"></i> Save Scripts</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

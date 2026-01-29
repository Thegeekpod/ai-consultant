@extends('layouts.admin')

@section('title', 'Manage Settings')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">General Settings</h4>
                    <p class="card-description"> Update site content texts and labels </p>
                    <form class="forms-sample" action="{{ route('admin.settings.update') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label>Hero Title</label>
                            <input type="text" class="form-control" name="hero_title"
                                value="{{ $settings['hero_title'] ?? '' }}"
                                placeholder="Next-Gen AI &lt;span&gt;Engine&lt;/span&gt;">
                            <small class="form-text text-muted">Use &lt;span&gt; for highlighted text.</small>
                        </div>

                        <div class="form-group">
                            <label>Hero Subtitle</label>
                            <textarea class="form-control" name="hero_subtitle" rows="2">{{ $settings['hero_subtitle'] ?? '' }}</textarea>
                        </div>

                        <h5 class="mt-4 mb-3">Stats Section</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Total Users Text</label>
                                    <input type="text" class="form-control" name="total_users"
                                        value="{{ $settings['total_users'] ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Total Sites Text</label>
                                    <input type="text" class="form-control" name="total_sites_text"
                                        value="{{ $settings['total_sites_text'] ?? '' }}">
                                </div>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Brand Section</h5>
                        <div class="form-group">
                            <label>Brand Title</label>
                            <input type="text" class="form-control" name="brand_title"
                                value="{{ $settings['brand_title'] ?? '' }}">
                        </div>

                        <h5 class="mt-4 mb-3">Capabilities Section</h5>
                        <div class="form-group">
                            <label>Capability Title</label>
                            <input type="text" class="form-control" name="capability_title"
                                value="{{ $settings['capability_title'] ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label>Capability Subtitle</label>
                            <textarea class="form-control" name="capability_subtitle" rows="2">{{ $settings['capability_subtitle'] ?? '' }}</textarea>
                        </div>

                        <h5 class="mt-4 mb-3">Features Section</h5>
                        <div class="form-group">
                            <label>Feature Title</label>
                            <input type="text" class="form-control" name="feature_title"
                                value="{{ $settings['feature_title'] ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label>Feature Subtitle</label>
                            <textarea class="form-control" name="feature_subtitle" rows="2">{{ $settings['feature_subtitle'] ?? '' }}</textarea>
                        </div>

                        <h5 class="mt-4 mb-3">Pricing Section</h5>
                        <div class="form-group">
                            <label>Price Title</label>
                            <input type="text" class="form-control" name="price_title"
                                value="{{ $settings['price_title'] ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label>Price Subtitle</label>
                            <textarea class="form-control" name="price_subtitle" rows="2">{{ $settings['price_subtitle'] ?? '' }}</textarea>
                        </div>

                        <h5 class="mt-4 mb-3">Blog Section</h5>
                        <div class="form-group">
                            <label>Blog Title</label>
                            <input type="text" class="form-control" name="blog_title"
                                value="{{ $settings['blog_title'] ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label>Blog Subtitle</label>
                            <textarea class="form-control" name="blog_subtitle" rows="2">{{ $settings['blog_subtitle'] ?? '' }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

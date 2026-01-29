@extends('layouts.admin')

@section('title', 'Create FAQ')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create New FAQ</h4>
                    <form class="forms-sample" action="{{ route('admin.faqs.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Question</label>
                            <input type="text" class="form-control" name="question" required>
                        </div>
                        <div class="form-group">
                            <label>Answer</label>
                            <textarea class="form-control" name="answer" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="status" value="1" checked>
                                    Status (Active)
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a href="{{ route('admin.faqs.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

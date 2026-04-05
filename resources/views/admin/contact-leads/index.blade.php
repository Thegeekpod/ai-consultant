@extends('layouts.admin')

@section('title', 'Contact Leads')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-md-6">
                <h1 class="h3 mb-0">Contact Leads</h1>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th class="border-0">Date</th>
                                <th class="border-0">Full Name</th>
                                <th class="border-0">Email</th>
                                <th class="border-0">Phone</th>
                                <th class="border-0">Message</th>
                                <th class="border-0">Page URL</th>
                                <th class="border-0 text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($leads as $lead)
                                <tr>
                                    <td class="text-muted small">{{ $lead->created_at->format('M d, Y H:i') }}</td>
                                    <td class="fw-bold text-dark">{{ $lead->full_name }}</td>
                                    <td><a href="mailto:{{ $lead->email }}" class="text-decoration-none text-primary fw-bold">{{ $lead->email }}</a></td>
                                    <td><a href="tel:{{ $lead->phone }}" class="text-decoration-none text-muted">{{ $lead->phone }}</a></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-info"
                                            data-bs-toggle="modal"
                                            data-bs-target="#messageModal{{ $lead->id }}">
                                            <i class="fa fa-envelope-o me-1"></i> View
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="messageModal{{ $lead->id }}"
                                            tabindex="-1"
                                            aria-labelledby="messageModalLabel{{ $lead->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content shadow-lg border-0">
                                                    <div class="modal-header bg-light">
                                                        <h5 class="modal-title fw-bold"
                                                            id="messageModalLabel{{ $lead->id }}">Message
                                                            from {{ $lead->full_name }}</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body p-4 text-dark">
                                                        <p style="white-space: pre-line;">{{ $lead->message }}</p>
                                                    </div>
                                                    <div class="modal-footer bg-light border-0">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @if ($lead->page_url)
                                            <a href="{{ $lead->page_url }}"
                                                target="_blank" class="text-muted small text-decoration-none"><i class="fa fa-external-link me-1"></i>Visit Page</a>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <form action="{{ route('admin.contact-leads.destroy', $lead) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this lead?');" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-5 text-muted">No leads found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                    {{ $leads->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

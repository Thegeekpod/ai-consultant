@extends('layouts.admin')

@section('title', 'Contact Leads')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Contact Leads</p>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Page URL</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($leads as $lead)
                                            <tr>
                                                <td>{{ $lead->created_at->format('M d, Y H:i') }}</td>
                                                <td>{{ $lead->full_name }}</td>
                                                <td class="font-weight-bold">{{ $lead->email }}</td>
                                                <td>{{ $lead->phone }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-info"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#messageModal{{ $lead->id }}">
                                                        View Message
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="messageModal{{ $lead->id }}"
                                                        tabindex="-1"
                                                        aria-labelledby="messageModalLabel{{ $lead->id }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="messageModalLabel{{ $lead->id }}">Message
                                                                        from {{ $lead->full_name }}</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    {{ $lead->message }}
                                                                </div>
                                                                <div class="modal-footer">
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
                                                            target="_blank">{{ Str::limit($lead->page_url, 30) }}</a>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="{{ route('admin.contact-leads.destroy', $lead) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Are you sure you want to delete this lead?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">No leads found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4">
                                {{ $leads->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

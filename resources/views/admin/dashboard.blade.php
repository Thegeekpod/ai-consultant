@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome {{ Auth::user()->name }}</h3>
                    <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span
                            class="text-primary">3 unread alerts!</span></h6>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">
                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                            <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button"
                                id="dropdownMenuDate2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="mdi mdi-calendar"></i> Today ({{ date('d M Y') }}) </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                <a class="dropdown-item" href="#">January - March</a>
                                <a class="dropdown-item" href="#">March - June</a>
                                <a class="dropdown-item" href="#">June - August</a>
                                <a class="dropdown-item" href="#">August - November</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card tale-bg shadow-sm border-0">
                <div class="card-people mt-auto">
                    <img src="{{ asset('admin/assets/images/dashboard/people.svg') }}" alt="people">
                    <div class="weather-info">
                        <div class="d-flex">
                            <div>
                                <h2 class="mb-0 font-weight-normal"><i class="icon-sun me-2"></i>31<sup>C</sup></h2>
                            </div>
                            <div class="ms-2">
                                <h4 class="location font-weight-normal">Mumbai</h4>
                                <h6 class="font-weight-normal">India</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin transparent">
            <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale shadow-sm border-0">
                        <div class="card-body">
                            <p class="mb-4">Today’s Leads</p>
                            <p class="fs-30 mb-2">{{ $recentLeads }}</p>
                            <p>New enquiries today</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue shadow-sm border-0">
                        <div class="card-body">
                            <p class="mb-4">Total Blogs</p>
                            <p class="fs-30 mb-2">{{ $totalBlogs }}</p>
                            <p>Total published posts</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue shadow-sm border-0">
                        <div class="card-body">
                            <p class="mb-4">Blog Categories</p>
                            <p class="fs-30 mb-2">{{ $totalCategories }}</p>
                            <p>Categorized topics</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger shadow-sm border-0">
                        <div class="card-body">
                            <p class="mb-4">Total Leads</p>
                            <p class="fs-30 mb-2">{{ $totalLeads }}</p>
                            <p>All-time enquiries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

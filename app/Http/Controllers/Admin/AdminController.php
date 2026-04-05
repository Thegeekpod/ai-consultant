<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\ContactLead;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalBlogs = Blog::count();
        $totalCategories = BlogCategory::count();
        $totalLeads = ContactLead::count();
        $recentLeads = ContactLead::where('created_at', '>=', Carbon::today())->count();

        return view('admin.dashboard', compact('totalBlogs', 'totalCategories', 'totalLeads', 'recentLeads'));
    }
}

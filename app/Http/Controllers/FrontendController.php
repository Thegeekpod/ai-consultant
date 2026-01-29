<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Plan;
use App\Models\Setting;

class FrontendController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        $capabilities = Service::where('type', 'capability')->where('status', true)->get();
        $features = Service::where('type', 'feature')->where('status', true)->get();
        $blogs = Blog::where('status', true)->latest()->take(3)->get();
        $testimonials = Testimonial::all();
        $faqs = Faq::where('status', true)->get();
        $monthly_plans = Plan::where('type', 'monthly')->where('status', true)->get();
        $yearly_plans = Plan::where('type', 'yearly')->where('status', true)->get();

        return view('index', compact(
            'settings',
            'capabilities',
            'features',
            'blogs',
            'testimonials',
            'faqs',
            'monthly_plans',
            'yearly_plans'
        ));
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function projects()
    {
        return view('projects');
    }

    public function team()
    {
        return view('team');
    }

    public function faq()
    {
        return view('faq');
    }

    public function serviceDetails()
    {
        return view('service-details');
    }

    public function blogDetails()
    {
        return view('blog-details');
    }

    public function teamDetails()
    {
        return view('team-details');
    }

    public function projectsDetails()
    {
        return view('projects-details');
    }
}

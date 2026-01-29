<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
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

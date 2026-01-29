<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/service', 'service')->name('service');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/team', 'team')->name('team');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/service-details', 'serviceDetails')->name('service-details');
    Route::get('/blog-details', 'blogDetails')->name('blog-details');
    Route::get('/team-details', 'teamDetails')->name('team-details');
    Route::get('/projects-details', 'projectsDetails')->name('projects-details');
});

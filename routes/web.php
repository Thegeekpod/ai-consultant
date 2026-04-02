<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;

// Frontend Routes
Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/service', 'service')->name('service');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/{slug}', [FrontendController::class, 'blogDetails'])->name('blog-details');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contactStore')->name('contact.store');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/team', 'team')->name('team');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/service-details', 'serviceDetails')->name('service-details');
    Route::get('/team-details', 'teamDetails')->name('team-details');
    Route::get('/projects-details', 'projectsDetails')->name('projects-details');
    Route::get('/terms', 'terms')->name('terms');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/tools', 'tools')->name('tools');
    Route::get('/tools/ai-readiness', 'aiReadiness')->name('tools.readiness');
    Route::get('/tools/ai-audit', 'aiAudit')->name('tools.audit');
    Route::post('/tools/run-audit', 'runAudit')->name('tools.run-audit');

    // Dynamic Pages
    Route::get('/solutions', 'solutions')->name('solutions');
    Route::get('/industries', 'industries')->name('industries');
});

// NOTE: The wildcard dynamic route is defined LAST to prevent it from
// swallowing admin/auth routes that are registered above.

// Auth Routes
Auth::routes();

// Admin Routes
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Menu Management
    Route::resource('menus', \App\Http\Controllers\Admin\MenuController::class);
    Route::post('menus/update-order', [\App\Http\Controllers\Admin\MenuController::class, 'updateOrder'])->name('menus.update-order');

    // Blogs
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class);
    Route::resource('blog-categories', \App\Http\Controllers\Admin\BlogCategoryController::class);

    // Contact Leads
    Route::resource('contact-leads', \App\Http\Controllers\Admin\ContactLeadController::class)->only(['index', 'destroy']);

    // SEO Settings
    Route::resource('seo-settings', \App\Http\Controllers\Admin\SeoSettingController::class);
});

// Dynamic catch-all — must be LAST so it doesn't intercept admin/auth routes
Route::controller(FrontendController::class)->group(function () {
    Route::get('/{category}/{slug}', 'dynamicPage')->name('dynamic.page');
});

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;
use App\Models\SeoSetting;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('partials.head', function ($view) {
            $path = Request::getPathInfo();
            // Normalize path: remove trailing slash except for root
            if ($path != '/' && str_ends_with($path, '/')) {
                $path = rtrim($path, '/');
            }
            $seo = SeoSetting::where('page_url', $path)->where('is_active', true)->first();
            
            $view->with('seo_settings', $seo);
        });
    }
}

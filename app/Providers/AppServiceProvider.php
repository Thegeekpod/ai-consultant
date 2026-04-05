<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share menu data with header and offcanvas views
        \Illuminate\Support\Facades\View::composer(['partials.header', 'partials.offcanvas'], function ($view) {
            $menus = \App\Models\Menu::with(['children' => function ($query) {
                $query->where('is_active', true)->orderBy('order');
            }, 'children.children' => function ($query) {
                $query->where('is_active', true)->orderBy('order');
            }])
                ->whereNull('parent_id')
                ->where('is_active', true)
                ->orderBy('order')
                ->get();

            $view->with('menus', $menus);
        });

        // Share global scripts across all views
        if (\Illuminate\Support\Facades\Schema::hasTable('global_scripts')) {
            $globalScripts = \App\Models\GlobalScript::first();
            \Illuminate\Support\Facades\View::share('global_scripts', $globalScripts);
        }
    }
}

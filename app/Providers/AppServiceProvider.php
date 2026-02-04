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
                $query->orderBy('order');
            }, 'children.children' => function ($query) {
                $query->orderBy('order');
            }])
                ->whereNull('parent_id')
                ->where('is_active', true)
                ->orderBy('order')
                ->get();

            $view->with('menus', $menus);
        });
    }
}

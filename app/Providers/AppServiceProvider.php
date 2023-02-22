<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Ort;
use App\Models\Region;
use App\Models\Gutachter;

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
        View::share('ortDE', Ort::all());
        View::share('regions', Region::all());
        View::share('gutachter', Gutachter::all());
    }
}

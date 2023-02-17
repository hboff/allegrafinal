<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Ort;

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
        View::share('ort', Ort::all());
    }
}

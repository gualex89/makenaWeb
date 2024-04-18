<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Catalogue;
use App\Observers\ImageObserver;

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
    public function boot()
    {
        Catalogue::observe(ImageObserver::class);
    }
}

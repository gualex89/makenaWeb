<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Catalogue;
use App\Observers\ImageObserver;
use App\Models\Duo;
use App\Observers\ImageDuoObserver;

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
        Duo::observe(ImageDuoObserver::class);
    }
}

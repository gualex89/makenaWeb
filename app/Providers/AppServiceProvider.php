<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Catalogue;
use App\Models\CatalogueCuadro;
use App\Observers\ImageObserver;
use App\Models\Duo;
use App\Observers\ImageCuadroObserver;
use App\Observers\ImageDuoObserver;
use App\Models\CatalogueRemera;
use App\Observers\ImageRemeraObserver;

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
        CatalogueCuadro::observe(ImageCuadroObserver::class);
        CatalogueRemera::observe(ImageRemeraObserver::class);
    }
}

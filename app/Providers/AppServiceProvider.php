<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Contracts\GalleryInterface',
            'App\Services\GalleryService'
        );
        $this->app->bind(
            'App\Contracts\PartnersInterface',
            'App\Services\PartnersService'
        );
        $this->app->bind(
            'App\Contracts\AboutInterface',
            'App\Services\AboutService'
        );
        $this->app->bind(
            'App\Contracts\RequestInterface',
            'App\Services\RequestService'
        );
        $this->app->bind(
            'App\Contracts\ContactInterface',
            'App\Services\ContactService'
        );
        $this->app->bind(
            'App\Contracts\BlogInterface',
            'App\Services\BlogService'
        );
        $this->app->bind(
            'App\Contracts\BlogGalleryInterface',
            'App\Services\BlogGalleryService'
        );
    }
}

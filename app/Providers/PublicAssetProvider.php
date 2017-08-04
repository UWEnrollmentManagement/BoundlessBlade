<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class PublicAssetProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../public' => public_path('vendor/uwdoem/boundless-blade'),
        ], 'public');
    }

}
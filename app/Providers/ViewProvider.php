<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class ViewProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../views ', 'boundless-blade');
    }

}
<?php

namespace SumonInfo\Installer\Providers;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\ServiceProvider;

class InstallerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     * @throws BindingResolutionException
     */
    public function register()
    {
        $this->app->make("SumonInfo\\Installer\\Controllers\\InstallerController");
        $this->loadViewsFrom(__DIR__ . '/../views', 'install');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . "/../routes.php";
    }
}

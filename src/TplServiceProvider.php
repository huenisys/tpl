<?php

namespace Huenisys\Tpl;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class TplServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setTemplateGlobals();

        //View::creator(
        //    ['tpl::master', 'tpl::contact'], 
        //    'Huenisys\Tpl\ViewComposers\MasterComposer'
        //);

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tpl');

        //$this->loadMigrationsFrom(__DIR__.'/../resources/migrations');

        //$this->loadTranslationsFrom(__DIR__.'/../resources/translations', 'tpl');

        $this->publishes([
            __DIR__.'/../config/tpl.php' => config_path('tpl.php'),
        ], 'tpl-config');

        // publishes tpl's assets [bs4, popper, etc]
        $this->publishes([
            __DIR__.'/../resources/assets' => resource_path('tpl/assets'),
        ], 'tpl-assets');



    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/tpl.php', 'tpl'
        );

        $this->app->singleton('tpl', function ($app) {
            return new Tpl($app);
        });
    }

    public function setTemplateGlobals()
    {
        $tpl_globals = Config::get('tpl');
        foreach ($tpl_globals as $key => $value) {
            View::share($key, $value);
        }

    }
}

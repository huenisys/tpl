<?php

namespace Huenisys\Tpl\Facades;

use Illuminate\Support\Facades\Facade;

class Tpl extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tpl';
    }

    /**
     * Register the typical authentication routes for an application.
     *
     * @return void
     */
    public static function authRoutes()
    {
        static::$app->make('tpl')->registerAuthRoutes();
    }
}
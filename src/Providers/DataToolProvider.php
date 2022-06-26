<?php

namespace Nilgems\Datatools\Providers;

use Illuminate\Support\ServiceProvider;

class DataToolProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'routes' . DIRECTORY_SEPARATOR . 'web.php');
    }

    public function register()
    {

    }
}
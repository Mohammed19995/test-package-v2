<?php

namespace Alm\GenerateNumber;

use Illuminate\Support\ServiceProvider;
use Alm\GenerateNumber\Controllers\TestController;

class GenerateNumberServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
    }


    public function boot()
    {
        $this->app->make(TestController::class);
    }
}

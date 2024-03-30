<?php

namespace Hosi\Myp;

use Illuminate\Support\ServiceProvider;

class mypServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
		$this->loadRoutesFrom(__DIR__.'/routes.php');

    }
}

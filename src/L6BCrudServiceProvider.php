<?php

namespace 360col\L6BCrud;

use Illuminate\Support\ServiceProvider;

class L6BCrudServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
		$this->commands('360col\L6BCrud\Console\Commands\L6BCrud');
		$this->commands('360col\L6BCrud\Console\Commands\l6bStub');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

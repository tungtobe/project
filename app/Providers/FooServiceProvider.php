<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FooServiceProvider extends ServiceProvider {
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        // var_dump('boot');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        // var_dump('register');
    }
}

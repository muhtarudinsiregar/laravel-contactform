<?php
namespace MuhtarudinSiregar\contactform;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ContactFormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'contactform');
        $this->loadMigrationsFrom(__DIR__ . '/app/Database/migrations');

        Blade::component('contactform::components.alert', 'alert');
    }
    public function register()
    {
    }
}

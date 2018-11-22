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

        $this->publishes(
            [
                __DIR__ . '/config/contact/contact.php' => config_path('contact.php'),
            ]
        );
    }
    public function register()
    {
    }
}

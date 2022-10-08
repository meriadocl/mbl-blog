<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;

class MailListServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ApiClient::class, function($app) {
            return new ApiClient();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

<?php

namespace App\Providers;

use App\Repositories\ContactRepository;
use App\Services\ContactService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ContactService::class, function () {
            return new ContactService(new ContactRepository());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

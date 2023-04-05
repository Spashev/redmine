<?php

namespace App\Providers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Redmine\Client\NativeCurlClient;
use App\Services\RedmineProjectService;
use App\Services\TrackerServiceInterface;

class RedmineServiceProvider extends ServiceProvider
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
        $this->app->bind(TrackerServiceInterface::class, function (Application $app) {
            return new RedmineProjectService($app->makeWith(NativeCurlClient::class, [
                'url' => env('REDMINE_URL'),
                'apikeyOrUsername' => env('REDMINE_API_KEY')
            ]));
        });
    }
}

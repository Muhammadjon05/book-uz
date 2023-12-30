<?php

namespace App\Providers;

use App\Repositories\GenericRepositories\GenericRepository;
use App\Repositories\GenericRepositories\IGenericRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IGenericRepository::class, GenericRepository::class);
    }
    public function boot(): void
    {
        //
    }
}

<?php

namespace App\Providers;

use App\Repositories\BookRepository\BookRepository;
use App\Repositories\BookRepository\IBookRepository;
use App\Repositories\CategoryRepository\CategoryRepository;
use App\Repositories\CategoryRepository\ICategoryRepository;
use App\Repositories\GenericRepositories\GenericRepository;
use App\Repositories\GenericRepositories\IGenericRepository;
use App\Repositories\UserRepository\IUserRepository;
use App\Repositories\UserRepository\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IUserRepository::class, UserRepository::class);
    }
    public function boot(): void
    {
        //
    }
}

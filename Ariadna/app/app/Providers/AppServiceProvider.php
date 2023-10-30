<?php

namespace App\Providers;

use App\Http\Repositories\Section\Impl\SectionRepositoryImpl;
use App\Http\Repositories\Section\SectionRepository;
use App\Http\Repositories\User\Impl\UserRepositoryImpl;
use App\Http\Repositories\User\UserRepository;
use App\Http\Services\Auth\AuthService;
use App\Http\Services\Auth\Impl\AuthServiceImpl;
use App\Http\Services\Section\Impl\SectionServiceImpl;
use App\Http\Services\Section\SectionService;
use App\Http\Services\User\Impl\UserServiceImpl;
use App\Http\Services\User\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //services
        $this->app->bind(AuthService::class, AuthServiceImpl::class);
        $this->app->bind(UserService::class, UserServiceImpl::class);
        $this->app->bind(SectionService::class, SectionServiceImpl::class);

        //Repositories
        $this->app->bind(UserRepository::class, UserRepositoryImpl::class);
        $this->app->bind(SectionRepository::class, SectionRepositoryImpl::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

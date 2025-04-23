<?php

namespace App\Providers;

use App\Repositories\CountryRepository;
use App\Repositories\DoctorTitleRepository;
use App\Repositories\Interfaces\CountryRepositoryInterface;
use App\Repositories\Interfaces\DoctorTitleInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        app()->bind(  DoctorTitleInterface::class, DoctorTitleRepository::class);
        app()->bind(CountryRepositoryInterface::class,CountryRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

<?php

namespace App\Providers;

use App\Faker\DoctorTitleProvider;
use App\Faker\SpecialityProvider;
use App\Repositories\DoctorTitleRepository;
use App\Repositories\interfaces\DoctorTitleInterface;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;
use App\Faker\CityCountryProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        // app()->bind(DoctorTitleInterface::class,DoctorTitleRepository::class);

        if ($this->app->environment('local') && class_exists(\Laravel\Telescope\TelescopeServiceProvider::class)) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
        // Response::macro('success',function($data,$message = "Success",$status = 200){
        //     return response()->json([
        //         'success' => true,
        //         'message' => $message,
        //         'data' => $data
        //     ],$status);
        // });
        $this->app->singleton('country', fn() => new CityCountryProvider());

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        fake()->addProvider(new DoctorTitleProvider(fake()));
        fake()->addprovider(new SpecialityProvider(fake()));
    }
}

<?php

namespace App\Providers;

use App\Faker\DoctorTitleProvider;
use App\Faker\SpecialityProvider;
use App\Repositories\DoctorTitleRepository;
use App\Repositories\interfaces\DoctorTitleInterface;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        // app()->bind(DoctorTitleInterface::class,DoctorTitleRepository::class);

        Response::macro('success',function($data,$message = 'success',$status=200){

          return response()->json([
            'success'=>true,
            'message'=>$message,
            'data'=>$data,

          ],$status);
        });

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

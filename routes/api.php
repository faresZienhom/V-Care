<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\DoctorTitleController;
use App\Http\Controllers\SpecialityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(DoctorTitleController::class)->prefix('doctor_title')->group(function(){
    Route::get('/', 'index');
    Route::get('/{title}', 'show');
    Route::post('/', 'store');
    Route::put('/{title}', 'edit');
    Route::delete('/{title}', 'delete');
});

Route::controller(CountryController::class)->prefix('countries')->group(function () {
    Route::get('/', 'index');
    Route::get('/{country}', 'show');
    Route::post('/', 'store');
    Route::put('/{country}', 'edit');
    Route::delete('/{country}', 'destroy');
});



Route::controller(SpecialityController::class)->prefix('specialities')->group(function () {
    Route::get('/', 'index');
    Route::get('/{speciality}', 'show');
    Route::post('/', 'store');
    Route::put('/{speciality}', 'edit');
    Route::delete('/{speciality}', 'destroy');
});


/*********   home page api's */
// search api for doctor (speciality_name,city_name)  or (doctor_name)
// api to get all services
// api to get special offers (remaining_count)
// api to return top specialities
// api to return social media links

/*********   contact us page api's */
// api to send contact

/*********   special offers page api's */
// api to get special offers (rate,rate_numbers)
// api to get services have offers

/*********   offer details page api's */
// api to offer details
// api to get doctor details
// api to get clinic details
// api to get average rating for clinic,doctor,assistant,overall with count for every rating value with count for visitors
// api to get top four comments for clinic
// api to get available slots per month
// api to create booking


/*********   doctors page api's */
// api to get all doctors
// api to get all specialities
// api to get doctor filter count(title,gender,availibility,entity)





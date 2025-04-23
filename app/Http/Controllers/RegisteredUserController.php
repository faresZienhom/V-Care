<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\LoginResponse;

class RegisteredUserController extends Controller
{
    //
    public function store(Request $request,
        CreateNewUser $creator): LoginResponse
    {
        event(new Registered( $user =$creator->create($request->all())));
        $request->request->add(['user' => $user]);
        return app(LoginResponse::class);
    }
}

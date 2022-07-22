<?php

namespace App\Http\Controllers\Account\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\Teacher\Auth\RegisterRequest;
use App\Services\Account\Teacher\AuthService;

class AuthContoller extends Controller
{
    public function register(RegisterRequest $request){
        $request = $request->validated();
        if(AuthService::register($request)){
            return 1;
        }
        return 0;
       
    }
}

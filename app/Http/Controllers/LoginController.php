<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function show(){

        return view('auth.login');

    }

    public function login(LoginUserRequest $request){

        $credentials = $request

        return redirect('/') -> with('success', "Login Success ");

    }
}

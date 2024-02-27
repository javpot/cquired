<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
        $google_user = Socialite::driver('google')->user();
        $user = User::where('google_id', $google_user->getId())->orWhere('email', $google_user->getEmail())->first();

        $userData = [
            'name' => $google_user->getName(),
            'email' => $google_user->getEmail(),
            'google_id' => $google_user->getId(),
        ];

        if (!$user) {
            Session::put('user_data', $userData);

    		return redirect()->to('register');
        } else {
            Auth::login($user);

            return redirect()->intended('dashboard');
        }
    } catch (\Illuminate\Database\QueryException $e) {
        if ($e->errorInfo[1] == 1062) {
            dd('Email address already exists.');
        } else {
            dd('Something went wrong! ' . $e->getMessage());
        }
    }

    }
}

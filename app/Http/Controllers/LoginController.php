<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirectToGitHub()
    {
        return Socialite::driver('github')->redirect();
    }
    /**
     * Obtiene la información del usuario de GitHub.
     */
    public function handleGitHubCallback()
    {
        $githubUser = Socialite::driver('github')->stateless()->user();
       
        $appUser = User::firstOrCreate([
            'email' => $githubUser->getEmail()
        ], [
            'name' => $githubUser->getName(),
            'email' => $githubUser->getEmail(),
            'password' => Hash::make($githubUser->getEmail()),
        ]);

        auth()->login($appUser);
        return redirect('/');

    }
}

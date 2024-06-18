<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
       /* User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('1234'),

        ]);*/
        return view('auth.login');
    }

    public function doLogin(LoginFormRequest $request)
    {
        $credentials = $request->validated();
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended(route('enseignant.cours.index'));
        }
        return back()->withErrors([
            'email' => 'identifiants incorrects'
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Vous êtes maintenant déconnecté');
    }
}

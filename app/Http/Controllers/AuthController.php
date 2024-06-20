<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function toRegister(RegisterFormRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        //dd($data);
        User::create($data);
        return redirect()->route('login');
    }

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
        if(Auth::attempt($credentials) && Auth::user()->role == 'enseignant')
        {
            $request->session()->regenerate();
            return redirect()->intended(route('enseignant.cours.index'));

        }elseif (Auth::attempt($credentials) && Auth::user()->role == 'user')
        {
            $request->session()->regenerate();
            return redirect()->intended(route('etudiant.cours.accueil'));
        }else{

            $request->session()->regenerate();
            return redirect()->intended(route('users.index'));

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

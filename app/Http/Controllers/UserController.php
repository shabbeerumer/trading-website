<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    public function index()
    {
        return view('landing_page.first');
    }

    public function pageshowsignin()
    {
        return view('landing_page.signup');
    }


    public function pageshowlogin()
    {
        return view('landing_page.login');
    }

    public function register(Request $request)
    {

        $users = $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'name' => 'required',
        ]);

        $user = User::create($users);

        if ($user) {
            // dd($user);
            return redirect()->route('pageshowlogin')->with('success', 'Registration Successful');
        }
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = Auth::attempt($data);
        if ($user) {
            return redirect()->route('userpage');
        } else {
            return redirect()->back();
        }
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $find_user = User::where('googleid', $user->id)->first();
        if ($find_user) {
            Auth::login($find_user);
            return redirect()->route('userpage');
        } else {
            $newUser = User::updateOrCreate([
                'name' => $user->name,
                'email' => $user->email,
                'googleid' => $user->id,
                'password' => encrypt('123456dummy')
            ]);
            Auth::login($newUser);
            return redirect()->route('userpage');
        }
    }


    public function redirectTogithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handlegithubCallback()
    {
        $user = Socialite::driver('github')->user();
        $find_user = User::where('githubid', $user->id)->first();
        if ($find_user) {
            Auth::login($find_user);
            return redirect()->route('userpage');
        } else {
            $newUser = User::updateOrCreate([
                'name' => $user->name,
                'email' => $user->email,
                'githubid' => $user->id,
                'password' => encrypt('123456dummy')
            ]);
            Auth::login($newUser);
            return redirect()->route('userpage');
        }
    }


    public function showtrading()
    {
        return view('landing_page.trading_page');
    }
}

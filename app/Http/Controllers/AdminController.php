<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard_page.dashboard');
    }

    public function adminpagelogin()
    {
        return view('dashboard_page.admin_login');
    }

    public function adminlogin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('admin')->attempt($data)) {
            $user = Auth::guard('admin')->user();
            if ($user->role != 'admin') {
                Auth::guard('admin')->logout();
                return redirect()->route('adminpagelogin')->withErrors(['You are not authorized as an admin']);
            }
            // dd($user);
            return view('dashboard_page.dashboard');
        } else {
            return redirect()->back()->withErrors(['Invalid email or password']);
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('adminpagelogin');
    }

    public function adminanalytics()
    {
        return view('dashboard_page.analytics');
    }
}

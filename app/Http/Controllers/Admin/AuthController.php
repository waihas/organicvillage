<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('admin')->attempt([
            'username' => $request->username,
            'password' => $request->password
        ], $request->get('remember'))) {
            return redirect()->intended(route('admin.dashboard.index'));
        }
        return back()->withInput($request->only('username', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('admin.login');
    }
}

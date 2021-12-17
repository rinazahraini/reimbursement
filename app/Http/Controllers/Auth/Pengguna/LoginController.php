<?php

namespace App\Http\Controllers\Auth\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:user')->except('postLogout');
    }

    public function getLogin()
    {
        return view('auth.pengguna.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (auth()->guard('user')->attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
        }
    }

    public function postLogout()
    {
        auth()->guard('user')->logout();
        session()->flush();

        return redirect()->route('login.user');
    }
}

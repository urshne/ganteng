<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index(){
    return view('login.login');
    }

    public function authenticate(Request $r)
    {
        if(Auth::attempt($r->only('email', 'password'))) {
            $r->session()->regenerate();
            return redirect('/');
        }

        throw ValidationException::withMessages([
            'email' => "Email can't be found",
            'password' => `Your password don't match in our records`,

        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('login');
    }
}
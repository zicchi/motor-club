<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $auth = Auth::attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);

        if ($auth){
            return redirect()->route('home');
        }else{
            return redirect()->route('');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $user = new User();

        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('login::index');
    }
}

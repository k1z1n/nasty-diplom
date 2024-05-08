<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string',
            'surname' => 'required|string',
            'number' => 'required|numeric|max:99999999999|unique:users',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|confirmed'
        ]);
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        if($user){
            auth()->login($user);
            return redirect()->route('profile')->with('success', 'Успешная регистрация');
        }
        return back()->with('error', 'Ошибка регистрации');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('profile');
        }

        return back()->with('error', 'Неправильный email или пароль');
    }

    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('home');
    }
}

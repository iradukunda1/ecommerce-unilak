<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showHomePage()
    {
        return view('welcome');
    }

    public function showRegistrationForm()
    {
        return view('registrationForm');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:5'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('message', 'User registered successfully');
    }

    public function showLogin()
    {
        return view('userLogin');
    }

    public function userLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return view('welcome');
        }

        return redirect()->back()->with('message', 'Invalid Credentials');
    }
}

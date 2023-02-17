<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Shoe register/create form
    public function register()
    {
        return view('users.register');
    }

    //Create new user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        //Hash the password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);
        return redirect('/')->with('message', 'User created and logged in');
    }

    //Logout
    public function logout(Request $request)
    {
        auth()->logout();

        //Invalidte the user's session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');
    }

    //Login
    public function login()
    {
        return view('users.login');
    }
}

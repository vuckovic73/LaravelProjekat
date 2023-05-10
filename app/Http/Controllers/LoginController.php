<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);
        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            return redirect('/register')->with('error', 'User already exists!');
        }
        $user = new User;
        $user->ime = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
    
        return redirect('/register')->with('success', 'User registered successfully!');
    }
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
    
    // If a user with the provided email address was found and the password matches the one stored in the database, log the user in
    if ($user && $user->password === $password) {
        return redirect()->route('final');
    } else {
        // If the email and password did not match, redirect the user back to the login page with an error message
        return redirect('/')->with('error', 'Invalid email address or password');
    }
}
}
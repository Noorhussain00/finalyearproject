<?php

namespace App\Http\Controllers;

use App\Models\Usercode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Show the registration form for the user
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Handle user registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'admin' => 'nullable|boolean',  // Optional, can be passed for admin registration
        ]);

        // Create a new user with default admin value of 0 unless specified
        $user = Usercode::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'admin' => $request->admin ?? 0,  // Default to 0 if admin is not passed
        ]);

        // Log the user in immediately after registration
        Auth::login($user);

        // Redirect based on the 'admin' field value
        if ($user->admin == 1) {
            return redirect()->route('admin.dashboard');  // Redirect to admin dashboard if admin
        }

        return redirect()->route('user.dashboard');  // Regular user dashboard
    }

    // Show the login form for both user and doctor
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login for both user and doctor
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'role' => 'required|string',  // Added role to distinguish between user and doctor
        ]);

        // Check if role is 'doctor' or 'user'
        if ($request->role == 'doctor') {
            // Attempt login with the 'doctor' guard
            if (Auth::guard('doctor')->attempt($request->only('email', 'password'))) {
                return redirect()->route('doctor.registration.dashboard');
            }
        } else {
            // Attempt login with the 'web' guard (user)
            if (Auth::guard('web')->attempt($request->only('email', 'password'))) {
                // Check if the user is an admin after successful login
                $user = Auth::user();
                if ($user->admin == 1) {
                    // Redirect to admin dashboard if admin
                    return redirect()->route('admin.dashboard');
                }

                // Regular user dashboard
                return redirect()->route('user.dashboard');
            }
        }

        // If credentials are invalid or role doesn't match, return an error
        return back()->withErrors(['email' => 'Invalid credentials or role']);
    }

    // Show the user dashboard
    public function dashboard()
    {
        return view('dashboard');
    }

    // Show the doctor dashboard
    public function doctorDashboard()
    {
        return view('doctor.dashboard');
    }

    // Handle logout for both user and doctor
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }

    // Show the student page (if needed)
    public function showStudent()
    {
        return view('auth.student');
    }
}

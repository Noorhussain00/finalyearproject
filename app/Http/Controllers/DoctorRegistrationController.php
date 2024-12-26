<?php

namespace App\Http\Controllers;

use App\Models\DoctorRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DoctorRegistrationController extends Controller
{
    // Show the doctor registration form
    public function showForm()
    {
        return view('doctor_registration.form');
    }

    // Store the doctor registration data in the database
    public function store(Request $request)
    {
        // Validate the registration form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:doctor_registrations',
            'password' => 'required|string|min:8|confirmed',
            'specialization' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
        ]);

        // Store the new doctor's registration
        $doctor = DoctorRegistration::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),  // Hash password
            'specialization' => $request->specialization,
            'phone_number' => $request->phone_number,
        ]);

        // Log in the doctor immediately after registration
        Auth::guard('doctor')->login($doctor);

        // Redirect to the doctor registration dashboard
        return redirect()->route('doctor.registration.dashboard');
    }

    // Show the list of doctor registrations
    public function show()
    {
        $doctors = DoctorRegistration::all();  // Get all doctor registrations
        return view('doctor_registration.list', compact('doctors'));  // Return the list view
    }

    // Optionally, you can add a destroy method to delete doctor registrations
    public function destroy($id)
    {
        $doctor = DoctorRegistration::find($id);
        $doctor->delete();
        return redirect()->route('doctor_registration.show')->with('success', 'Doctor deleted successfully.');
    }

    // Show the doctor registration dashboard
    public function dashboard()
    {
        // Get the currently authenticated doctor
        $doctor = Auth::guard('doctor')->user();

        // Return the doctor dashboard view with the doctor data
        return view('doctor_registration.dashboard', compact('doctor'));
    }
}

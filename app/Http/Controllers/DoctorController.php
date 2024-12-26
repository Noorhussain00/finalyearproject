<?php
namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    // Show the doctor information form
    public function showForm()
    {
        return view('doctor.form');
    }

    // Store the doctor information
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:doctors',
            'specialization' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
        ]);

        // Store the doctor's data in the database
        Doctor::create([
            'name' => $request->name,
            'email' => $request->email,
            'specialization' => $request->specialization,
            'phone_number' => $request->phone_number,
        ]);

        // Redirect to the page where doctor details are displayed
        return back()->with('success', 'Your data has been sent. Please wait for admin approval.');
    }

    // Show all doctor details
    public function showDoctors()
    {
        // Fetch all doctors from the database
        $doctors = Doctor::all();
        return view('doctor.show', compact('doctors'));
    }
    public function destroy($id)
    {
        // Find the doctor by ID and delete
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();

        // Redirect back with a success message
        return redirect()->route('doctor.show')->with('success', 'Doctor form deleted successfully.');
    }


}

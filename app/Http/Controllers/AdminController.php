<?php

namespace App\Http\Controllers;

use App\Models\Usercode;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Admin Dashboard method
    public function dashboard()
    {
        // Fetch the count of active users
        $activeUsersCount = Usercode::where('is_active', 1)->count();

        // Pass the active users count to the dashboard view
        return view('admin.users', compact('activeUsersCount'));
    }

    // Manage users method
    public function manageUsers()
    {
        // Fetch all users
        $users = Usercode::all();

        // Fetch the count of active users
        $activeUsersCount = Usercode::where('is_active', 1)->count();

        // Pass both 'users' and 'activeUsersCount' to the 'users' view
        return view('admin.users', compact('users', 'activeUsersCount'));
    }

    // Delete user method
    public function deleteUser($id)
    {
        $user = Usercode::findOrFail($id);  // Fetch the user by ID
        $user->delete();  // Delete the user

        // Redirect back with success message
        return redirect()->route('admin.manageUsers')->with('success', 'User deleted successfully');
    }

    // Toggle user active/inactive status method
    public function toggleUserStatus($id)
    {
        $user = Usercode::findOrFail($id);  // Find the user by ID

        // Toggle the is_active status
        $user->is_active = !$user->is_active;
        $user->save();  // Save changes to the database

        // Redirect back with a success message
        return redirect()->route('admin.manageUsers')->with('success', 'User status updated successfully.');
    }
}

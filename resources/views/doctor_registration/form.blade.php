@extends('admin.layout') <!-- Extend the admin layout -->

@section('title', 'Register a Doctor') <!-- Set the title for this page -->

@section('content')
<div class="container my-5">
    <!-- Title -->
    <h1 class="text-center my-4" style="font-size: 2rem; font-weight: bold; color: #333;">Register a Doctor for Login</h1>

    <!-- Show success message -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Form Container -->
    <div class="card shadow-lg p-4">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title text-center">Doctor Registration</h5>
        </div>
        <div class="card-body">
            <!-- Registration Form -->
            <form action="{{ route('doctor_registration.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Name:</label>
                    <input type="text" name="name" id="name" class="form-control rounded-pill" required>
                </div>

                <div class="form-group">
                    <label for="email" class="font-weight-bold">Email:</label>
                    <input type="email" name="email" id="email" class="form-control rounded-pill" required>
                </div>

                <div class="form-group">
                    <label for="password" class="font-weight-bold">Password:</label>
                    <input type="password" name="password" id="password" class="form-control rounded-pill" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="font-weight-bold">Confirm Password:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control rounded-pill" required>
                </div>

                <div class="form-group">
                    <label for="specialization" class="font-weight-bold">Specialization:</label>
                    <input type="text" name="specialization" id="specialization" class="form-control rounded-pill" required>
                </div>

                <div class="form-group">
                    <label for="phone_number" class="font-weight-bold">Phone Number:</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control rounded-pill" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-block rounded-pill py-2">Register</button>
            </form>
        </div>
    </div>

    <!-- Back Link -->
    <div class="text-center mt-3">
        <a href="{{ route('doctor.show') }}" class="btn btn-secondary btn-sm rounded-pill">Back to Doctors List</a>
    </div>
</div>
@endsection

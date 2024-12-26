@extends('admin.layout') <!-- Extend the admin layout -->

@section('title', 'Manage Doctors') <!-- Set the title for this page -->

@section('content')
<!-- Content for the Doctor List page -->

<div class="container">
    <h1 class="text-center my-4" style="font-size: 2rem;">These are Registered Doctors</h1>

    <!-- Show success message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table for Doctor List -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Doctors List</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Specialization</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctors as $doctor)
                        <tr>
                            <td>{{ $doctor->name }}</td>
                            <td>{{ $doctor->email }}</td>
                            <td>{{ $doctor->specialization }}</td>
                            <td>{{ $doctor->phone_number }}</td>
                            <td>
                                <form action="{{ route('doctor.delete', $doctor->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- <!-- Button to Register a New Doctor -->
    <div class="text-center mt-3">
        <a href="{{ route('doctor_registration.form') }}" class="btn btn-success">Register a New Doctor</a>
    </div>
</div> --}}

@endsection

@extends('admin.layout') <!-- Extend the admin layout -->

@section('title', 'Manage Doctors') <!-- Set the title for this page -->

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Doctor Request Form</h5>
                {{-- <p class="card-category">Doctors request form</p> --}}
            </div>
            <div class="card-body">
                @if ($doctors->isEmpty())
                    <p>No doctors available.</p>
                @else
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <table class="table table-striped">
                        <thead>
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
                                        <form action="{{ route('formdoctor.delete', $doctor->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            <div class="card-footer">
                <hr>
                <div class="stats">
                    <i class="fa fa-history"></i> Updated just now
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

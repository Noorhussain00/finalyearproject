<pre>{{ var_dump($users) }}</pre>

@extends('admin.layout')

@section('content')
    <div class="container mt-5">
        <h1>Manage Users</h1>

        <!-- Display Active Users Count -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Active Users</h5>
            </div>
            <div class="card-body">
                <p>Total Active Users: {{ $activeUsersCount }}</p>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <!-- Toggle Active/Inactive Status -->
                            <form action="{{ route('admin.toggleUserStatus', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-warning">
                                    {{ $user->is_active ? 'Deactivate' : 'Activate' }}
                                </button>
                            </form>

                            <!-- Delete User -->
                            <form action="{{ route('admin.deleteUser', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
   </div>
@endsection

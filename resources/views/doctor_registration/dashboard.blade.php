{{-- resources/views/doctor_dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
</head>
<body>
    <h1>Welcome, Dr. {{ $doctor->name }}</h1>

    <p><strong>Email:</strong> {{ $doctor->email }}</p>
    <p><strong>Specialization:</strong> {{ $doctor->specialization }}</p>
    <p><strong>Phone Number:</strong> {{ $doctor->phone_number }}</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>

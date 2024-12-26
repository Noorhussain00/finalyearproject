<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>this is user table {{ Auth::user()->name }}!</h1>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <!-- Link to the doctrs page -->
    {{-- <a href="{{ route('doctrs') }}">
        <button>student</button>
    </a> --}}

    <!-- Link to the doctor page -->
    <a href="{{ route('student') }}">dotor

    </a>

</body>
</html>

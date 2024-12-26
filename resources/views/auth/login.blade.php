<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <!-- Show errors if any -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Login Form -->
    <form action="{{ url('login') }}" method="POST">
        @csrf

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <!-- Role selection dropdown -->
        <label for="role">Login as:</label>
        <select name="role" id="role" required>
            <option value="user">User</option>
            <option value="doctor">Doctor</option>
        </select><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>

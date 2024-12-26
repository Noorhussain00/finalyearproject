

<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
</head>
<body>
    <h1>Send Email</h1>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('send.email') }}">
        @csrf
        <label for="recipient">Recipient Email:</label>
        <input type="email" id="recipient" name="recipient" required>
        <br><br>

        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br><br>

        <button type="submit">Send Email</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Information Form</title>
</head>
<body>
    <h1>Doctor Information Form</h1>

    <form action="{{ route('doctor.store') }}" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="specialization">Specialization:</label>
        <input type="text" name="specialization" id="specialization" required><br><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" id="phone_number" required><br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>

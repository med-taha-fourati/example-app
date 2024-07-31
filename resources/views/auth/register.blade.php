<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

    <form method="POST" action="{{ route('auth.registration') }}">
        @csrf

        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>
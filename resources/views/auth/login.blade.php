<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>

    <h1>Login Form</h1>

    @if (session('success'))
        <div style="color: green; border: 1px solid green; padding: 10px; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <form>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
    </form>

    <p>Belum punya akun? silahkan <a href="{{ route('register.form') }}">Register</a></p>

</body>

</html>

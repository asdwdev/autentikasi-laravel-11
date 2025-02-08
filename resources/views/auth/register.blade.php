<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>

    <h1>Register Form</h1>

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}">
            @error('username')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            @error('password')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="konfirmasi_password">Konfirmasi Password:</label>
            <input type="password" name="konfirmasi_password" id="konfirmasi_password">
            @error('konfirmasi_password')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">Daftar</button>
        </div>
    </form>



    <p>Sudah punya akun? silahkan <a href="{{ route('login.form') }}">Login</a></p>

</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <form action="#" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
    <a href="{{ route('home') }}">Kembali ke Halaman Utama</a>
</body>
</html>

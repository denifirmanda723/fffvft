<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran</title>
</head>
<body>
    <h1>Halaman Pendaftaran</h1>
    <form action="#" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Daftar</button>
    </form>
    <a href="{{ route('home') }}">Kembali ke Halaman Utama</a>
</body>
</html>

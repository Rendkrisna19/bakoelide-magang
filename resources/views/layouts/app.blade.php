<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css') <!-- Atau link CSS sesuai dengan konfigurasi Anda -->
</head>
<body class="bg-gray-100">
    <div class="container mx-auto">
        <!-- Menampilkan konten halaman -->
        @yield('content')
    </div>
</body>
</html>

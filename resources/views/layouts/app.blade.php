<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Administrasi ORMAWA')</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font biar lebih modern -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50 flex flex-col min-h-screen font-[Poppins]">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Content --}}
    <main class="flex-1 pt-20">
        @include('partials.alert')

        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Administrasi ORMAWA')</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<<body class="bg-gray-50 flex flex-col min-h-screen">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Content --}}
    <main class="flex-1">

        @include('partials.alert')


    </main>

    {{-- Footer --}}
    @include('partials.footer')

</body>
    
</html>


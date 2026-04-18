<html class="h-full">
<body class="flex flex-col min-h-screen h-full">

    <main class="flex-1 min-h-screen pt-20">
        @yield('content')
    </main>

    <footer class="bg-sky-800 text-white mt-auto py-6 text-center">
        <p class="text-sm text-white/80">
            &copy; {{ date('Y') }} Sistem Administrasi ORMAWA | Kelompok 5
        </p>
    </footer>

</body>
</html>
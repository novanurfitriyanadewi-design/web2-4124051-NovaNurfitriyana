<body class="flex flex-col min-h-screen">

    <!-- Content -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-800 text-white mt-12 py-4 px-4 text-center block">
        <p class="text-sm text-slate-400">
            &copy; {{ date('Y') }} Sistem Administrasi ORMAWA |
            Kelompok 5
        </p>
    </footer>

</body>
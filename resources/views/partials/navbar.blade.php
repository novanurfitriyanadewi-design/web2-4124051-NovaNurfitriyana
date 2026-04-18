<nav class="fixed top-0 left-0 w-full z-50 bg-sky-700/90 backdrop-blur-md text-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <a href="/" class="font-bold text-lg">
            ORMAWA SAINTEK
        </a>

        <div class="flex gap-6 text-sm">

            <a href="/" class="hover:text-yellow-300">Beranda</a>
            <a href="/tentang" class="hover:text-yellow-300">Tentang</a>

            <!-- ORGANISASI DROPDOWN -->
            <div class="relative group">
                <span class="cursor-pointer hover:text-yellow-300">
                    Organisasi ▾
                </span>

                <div class="absolute hidden group-hover:block bg-white text-black mt-2 rounded shadow">

                    <a href="{{ route('ormawa.show', 'bem') }}" class="block px-4 py-2 hover:bg-gray-100">
                        BEM
                    </a>

                    <a href="{{ route('ormawa.show', 'dpm') }}" class="block px-4 py-2 hover:bg-gray-100">
                        DPM
                    </a>

                    <a href="{{ route('ormawa.show', 'himasi') }}" class="block px-4 py-2 hover:bg-gray-100">
                        HIMASI
                    </a>

                </div>
            </div>

            <a href="/program" class="hover:text-yellow-300">Program Kerja</a>

            <!-- SURAT -->
            <div class="relative group">
                <span class="cursor-pointer">Surat ▾</span>
                <div class="absolute hidden group-hover:block bg-white text-black mt-2 rounded shadow">
                    <a href="/surat-masuk" class="block px-4 py-2 hover:bg-gray-100">Surat Masuk</a>
                    <a href="/surat-keluar" class="block px-4 py-2 hover:bg-gray-100">Surat Keluar</a>
                </div>
            </div>

            <a href="/laporan" class="hover:text-yellow-300">Laporan</a>
            <a href="/login" class="bg-yellow-400 text-black px-3 py-1 rounded">Login</a>

        </div>
    </div>
</nav>
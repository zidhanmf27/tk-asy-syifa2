<!-- nav1 -->
<div class="bg-lime-600 font-medium text-gray-50 fixed w-full top-0 z-50">
    <div class="flex items-center justify-between h-10 px-4">
        <div class="flex items-center ml-35">
            <i class="fa-solid fa-graduation-cap" style="color: #ffffff;"></i>
            <span class="ml-2">Akreditasi A</span>
        </div>
        <div class="mr-35" id="waktuWIB">
            <script>
                function updateWaktu() {
                    const now = new Date();
                    const optionsDate = {
                        timeZone: 'Asia/Jakarta',
                        day: 'numeric',
                        month: 'long',
                        year: 'numeric'
                    };
                    const optionsTime = {
                        timeZone: 'Asia/Jakarta',
                        hour: '2-digit',
                        minute: '2-digit',
                        // second: '2-digit',
                        hour12: false
                    };

                    const formattedDate = now.toLocaleDateString('id-ID', optionsDate);
                    const formattedTime = now.toLocaleTimeString('id-ID', optionsTime).replace('.', ':');

                    document.getElementById('waktuWIB').textContent = `${formattedDate} | ${formattedTime} WIB`;
                }
                updateWaktu();
                setInterval(updateWaktu, 1000);
            </script>
        </div>
    </div>
</div>

<!-- nav2 -->
<div class="bg-gray-100 fixed w-full top-10 z-40" id="nav2">

    <div class="container mx-auto px-4 border-bottom">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-15 ml-6">
                <h1 class="ml-3 font-bold hover:cursor-default text-2xl ">TK AS-SYIFA 2</h1>
            </div>

            <!-- Navigation Menu -->
            <nav class="relative">
                <ul class="flex space-x-6 mr-6">
                    <li>
                        <a href="/" class="text-zinc-800 hover:font-medium">Beranda</a>
                    </li>

                    <!-- Tentang Dropdown -->
                    <li class="relative group">
                        <button class="text-zinc-800 hover:font-medium flex items-center">
                            Tentang
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <ul class="absolute hidden group-hover:block bg-white shadow-lg py-2 w-50 border-t-2 z-50">
                            <li>
                                <a href="{{ route('tentang.sejarah') }}"
                                    class="block px-4 py-2 text-gray-800 hover:text-black hover:bg-gray-400">Sejarah</a>
                            </li>
                            <li>
                                <a href="{{ route('tentang.visimisi') }}"
                                    class="block px-4 py-2 text-gray-800 hover:text-black hover:bg-gray-400">Visi dan
                                    Misi</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Galeri Dropdown -->
                    <li class="relative group">
                        <button class="text-zinc-800 hover:font-medium flex items-center">
                            Galeri
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <ul class="absolute hidden group-hover:block bg-white shadow-lg py-2 w-50 border-t-2 z-50">
                            <li><a href="/galeri/1"
                                    class="block px-4 py-2 text-gray-800 hover:text-black hover:bg-gray-400">Kegiatan</a>
                            </li>
                            <li><a href="/galeri/2"
                                    class="block px-4 py-2 text-gray-800 hover:text-black hover:bg-gray-400">Prestasi</a>
                            </li>
                        </ul>
                    </li>

                    <li class="relative group">
                        <button class="text-zinc-800 hover:font-medium flex items-center">
                            Informasi
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <ul class="absolute hidden group-hover:block bg-white shadow-lg py-2 w-50 border-t-2 z-50 ">
                            <li>
                                <a href="/tentang/1"
                                    class="block px-4 py-2 text-gray-800 hover:text-black hover:bg-gray-400">Fasilitas</a>
                            </li>
                            <li>
                                <a href="/tentang/1"
                                    class="block px-4 py-2 text-gray-800 hover:text-black hover:bg-gray-400">Struktur
                                    Organisasi</a>
                            </li>
                            <li>
                                <a href="/tentang/1"
                                    class="block px-4 py-2 text-gray-800 hover:text-black hover:bg-gray-400">Kalender
                                    Pendidikan</a>
                            </li>
                            <li>
                                <a href="/tentang/1"
                                    class="block px-4 py-2 text-gray-800 hover:text-black hover:bg-gray-400">PPDB</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#wadaw" class="text-zinc-800 hover:font-medium">Kontak</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

    <script>
        window.addEventListener('scroll', function () {
            const nav = document.getElementById('nav2');
            if (window.scrollY > 0) {
                nav.classList.add('shadow-md');
            } else {
                nav.classList.remove('shadow-md');
            }
        });
    </script>

</div>
    <!-- head -->
    @include('layout-lp.head')

    <!-- Navbar -->
    @include('layout-lp.navbar')

    <!-- Background -->
    <div class="relative h-[35vh] z-10 mt-30">
        <img src="{{ asset('assets/kinder.png') }}"
            class="absolute top-0 left-0 w-full h-full object-cover z-0 brightness-110 grayscale contrast-75"
            alt="Background">

        <!-- Overlay to make text more readable -->
        <div class="absolute top-0 left-0 w-full h-ful z-10"></div>
        <!-- Content -->
        <div class="relative z-20 flex items-center justify-center h-full text-center">
            <div class="text-zinc-800 px-4">
                <h1 class="text-5xl font-bold mb-4">Sejarah</h1>
            </div>
        </div>
    </div>

    <!-- Konten -->
    <div class="mx-35 p-5 mt-35 mb-55">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-gray-900 mb-8">Sejarah</h1>
            <hr class="border-1 w-29">

            <div class="mt-8">
                <p class="text-gray-800 mb-6 leading-relaxed text-base">
                    TK ASY-SYIFA 2, sebuah taman kanak-kanak swasta yang berlokasi di Kecamatan Kiaracondong, Kota
                    Bandung, Jawa Barat, hadir sebagai lembaga pendidikan anak usia dini yang berkomitmen untuk mencetak
                    generasi cerdas, kreatif, dan berakhlak mulia. Berdiri sejak 25 Mei 2016 berdasarkan SK Pendirian
                    AHU-0025758.AH.01.04.Tahun 2016, sekolah ini berada di bawah naungan Kementerian Pendidikan dan
                    Kebudayaan, menjamin standar pendidikan yang berkualitas dan terpercaya. Dengan lingkungan belajar
                    yang aman, nyaman, dan penuh keceriaan, TK ASY-SYIFA 2 menawarkan pendekatan pendidikan holistik
                    yang mengintegrasikan perkembangan kognitif, motorik, sosial, dan spiritual anak. Kurikulum kami
                    dirancang untuk merangsang imajinasi dan kreativitas anak melalui kegiatan bermain sambil belajar,
                    seni, dan eksplorasi alam, didukung oleh tenaga pengajar yang profesional dan berpengalaman dalam
                    mendampingi tumbuh kembang anak usia dini.
                </p>
                <p class="text-gray-800 mb-6 leading-relaxed text-base">
                    Kami di TK ASY-SYIFA 2 percaya bahwa setiap anak adalah unik dan memiliki potensi luar biasa yang
                    perlu dikembangkan sejak dini. Oleh karena itu, fasilitas kami dirancang untuk mendukung proses
                    belajar yang menyenangkan, mulai dari ruang kelas yang interaktif, area bermain yang aman, hingga
                    program ekstrakurikuler seperti tari, musik, dan pengenalan nilai-nilai keagamaan yang membentuk
                    karakter anak. Berlokasi strategis di Kota Bandung, TK ASY-SYIFA 2 menjadi pilihan ideal bagi orang
                    tua yang ingin memberikan fondasi pendidikan terbaik bagi buah hati mereka. Bergabunglah bersama
                    kami untuk memberikan awal yang cerah bagi masa depan anak Anda, di mana mereka dapat belajar,
                    berkembang, dan bersinar dalam suasana penuh kasih sayang dan kebahagiaan.
                </p>
            </div>
        </div>
    </div>

    @include('layout-lp.footer')
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
                <h1 class="text-5xl font-bold mb-4">Visi dan Misi</h1>
            </div>
        </div>
    </div>

    <!-- Konten -->
    <div class="mx-35 p-5 mt-35 mb-55">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-gray-900 mb-8">Visi dan Misi</h1>
            <hr class="border-1 w-53">

            <div class="mt-8">
                <!-- Visi -->
                <h5 class="text-gray-800 mb-6 leading-relaxed font-semibold">Visi</h5>
                <p class="text-gray-800 mb-6 leading-relaxed text-base">
                    Menjadi taman kanak-kanak terdepan di Kota Bandung dengan akreditasi A,
                    yang menghasilkan anak-anak cerdas, kreatif, mandiri, dan berakhlak mulia melalui penerapan
                    Kurikulum 2013 yang holistik,
                    berlandaskan nilai-nilai keislaman, serta didukung oleh lingkungan belajar yang inspiratif dan
                    berkualitas.
                </p>

                <!-- Misi -->
                <h5 class="text-gray-800 mb-6 leading-relaxed font-semibold">Misi</h5>
                <p class="text-gray-800 mb-6 leading-relaxed text-base">
                    1. Melaksanakan Kurikulum 2013 secara optimal untuk mengembangkan potensi anak secara seimbang,
                    mencakup aspek kognitif, motorik, sosial, emosional, dan spiritual. <br>
                    2. Mendorong kreativitas dan daya pikir kritis anak melalui pendekatan bermain sambil belajar,
                    kegiatan seni, dan eksplorasi lingkungan.<br>
                    3. Menanamkan nilai-nilai keislaman dan akhlak mulia sejak dini untuk membentuk karakter anak yang
                    jujur, sopan, dan peduli.<br>
                    4. Menjalin kerja sama yang erat dengan orang tua dan komunitas untuk mendukung perkembangan anak
                    secara holistik.<br>
                    5. Menyediakan fasilitas belajar yang modern, aman, dan nyaman, didukung oleh guru-guru berkualitas
                    yang berdedikasi untuk menjaga standar akreditasi A.
                </p>
            </div>
        </div>
    </div>

    @include('layout-lp.footer')
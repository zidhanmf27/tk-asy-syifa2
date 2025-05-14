<!-- Hero Section with Video Background -->
<div class="relative h-[75vh] z-10 mt-30">
    <!-- Video Background -->
    <video class="absolute top-0 left-0 w-full h-full object-cover z-0" autoplay loop muted playsinline>
        <source src="{{ asset('assets/bg1.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <!-- Overlay to make text more readable -->
    <div class="absolute top-0 left-0 w-full h-ful z-10"></div> 
    <!-- Content -->
    <div class="relative z-20 flex items-center justify-center h-full text-center">
        <div class="text-zinc-800 px-4">
            <img src="{{ asset('assets/logo.png') }}" alt="image/png" class="h-35 mb-5 ml-84 -mt-10">
            <h1 class="text-5xl font-bold mb-4">Selamat Datang di TK AS-SYIFA 2</h1>
            <p class="text-xl mb-8">Membentuk Generasi Cerdas, Kreatif dan Berakhlak Mulia</p>
            <a href=""
                class="bg-lime-600 text-white px-6 py-3 rounded-full hover:bg-lime-700 transition duration-300 scroll-smooth"
                onclick="document.getElementById('program-sekolah').scrollIntoView({behavior: 'smooth'})">
                Penerimaan Peserta Didik Baru
            </a>
        </div>
    </div>
</div>

<!-- Kepsek -->
<div class="ml-88 mt-22 ">
    <div class="flex flex-col md:flex-row container mx-auto justify-center">
        <!-- Left Column - Image Section with lime background -->
        <div class="w-full md:w-1/2 bg-lime-800 p-5 flex flex-col items-center justify-center">
            <img src="{{ asset('assets/kepsek.jpg') }}" alt="Kepala Sekolah" class="shadow-lg max-w-full h-auto">
            <div class="text-white text-center mt-4">
                <h3 class="font-bold text-base">Sri Sektipanchaswati., S. Psi</h3>
            </div>
        </div>

        <!-- Right Column - Text Section with white background -->
        <div class="w-full md:w-2/2 bg-zinc-200 p-10 mr-80">
            <h2 class="text-3xl font-bold text-zinc-800 mb-6">Sambutan<br>Kepala Sekolah</h2>
            <hr class="border-1 w-40">
            <p class="text-gray-600 mb-6 leading-relaxed mt-5">
                TK AS-SYIFA 2 menyediakan lingkungan pembelajaran yang aman, nyaman dan mendukung perkembangan anak.
                Dengan
                kurikulum yang komprehensif dan tenaga pengajar yang berpengalaman, kami berkomitmen untuk membantu
                setiap anak mencapai potensi terbaiknya.
            </p>
            <p class="text-gray-600 mb-8 leading-relaxed ">
                Program kami dirancang untuk mengembangkan aspek kognitif, sosial, emosional, dan motorik anak melalui
                berbagai aktivitas menarik dan edukatif.
            </p>
        </div>
    </div>
</div>

<!-- Grid Program -->
<div class="mx-35 mt-20" id="program-sekolah">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-4xl font-bold">Program <br> Sekolah</h2>
            </div>
        <hr class="h-18 w-0.5 bg-black mx-4">
            <div class="text-zinc-800 mr-180 font-medium">
                Program unggulan kami untuk mengembangkan potensi anak.
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <!-- PBI Program -->
            <div class="relative">
                <div class="bg-gray-200 h-48 mb-2 rounded-lg flex items-center justify-center text-gray-400">
                    Image
                </div>
                <div class="bg-blue-900 text-white p-3 rounded-b-lg">
                    <div class="font-semibold text-sm mb-1">#PBI</div>
                    <div class="font-bold">Pembiasaan dan Bimbingan Ibadah</div>
                </div>
            </div>

            <!-- PBA Program -->
            <div class="relative">
                <div class="bg-gray-200 h-48 mb-2 rounded-lg flex items-center justify-center text-gray-400">
                    Image
                </div>
                <div class="bg-purple-800 text-white p-3 rounded-b-lg">
                    <div class="font-semibold text-sm mb-1">#PBA</div>
                    <div class="font-bold h-12">Program Bahasa Inggris</div>
                </div>
            </div>

            <!-- PMB Program -->
            <div class="relative">
                <div class="bg-gray-200 h-48 mb-2 rounded-lg flex items-center justify-center text-gray-400">
                    Image
                </div>
                <div class="bg-blue-600 text-white p-3 rounded-b-lg">
                    <div class="font-semibold text-sm mb-1">#PMB</div>
                    <div class="font-bold h-12">Pengembangan Minat Bakat</div>
                </div>
            </div>

            <!-- PKB Program -->
            <div class="relative">
                <div class="bg-gray-200 h-48 mb-2 rounded-lg flex items-center justify-center text-gray-400">
                    Image
                </div>
                <div class="bg-green-600 text-white p-3 rounded-b-lg">
                    <div class="font-semibold text-sm mb-1">#PKB</div>
                    <div class="font-bold h-12">Pendidikan Karakter</div>
                </div>
            </div>
            <div class="relative">
                <div class="bg-gray-200 h-48 mb-2 rounded-lg flex items-center justify-center text-gray-400">
                    Image
                </div>
                <div class="bg-blue-900 text-white p-3 rounded-b-lg">
                    <div class="font-semibold text-sm mb-1">#PBI</div>
                    <div class="font-bold h-12">Pembiasaan dan Bimbingan Ibadah</div>
                </div>
            </div>

            <!-- PBA Program -->
            <div class="relative">
                <div class="bg-gray-200 h-48 mb-2 rounded-lg flex items-center justify-center text-gray-400">
                    Image
                </div>
                <div class="bg-purple-800 text-white p-3 rounded-b-lg">
                    <div class="font-semibold text-sm mb-1">#PBA</div>
                    <div class="font-bold h-12">Program Bahasa Inggris</div>
                </div>
            </div>

            <!-- PMB Program -->
            <div class="relative">
                <div class="bg-gray-200 h-48 mb-2 rounded-lg flex items-center justify-center text-gray-400">
                    Image
                </div>
                <div class="bg-blue-600 text-white p-3 rounded-b-lg">
                    <div class="font-semibold text-sm mb-1">#PMB</div>
                    <div class="font-bold h-12">Pengembangan Minat Bakat</div>
                </div>
            </div>

            <!-- PKB Program -->
            <div class="relative">
                <div class="bg-gray-200 h-48 mb-2 rounded-lg flex items-center justify-center text-gray-400">
                    Image
                </div>
                <div class="bg-green-600 text-white p-3 rounded-b-lg">
                    <div class="font-semibold text-sm mb-1">#PKB</div>
                    <div class="font-bold h-12">Pendidikan Karakter</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Eskul -->
<div class="mx-35 p-5 mt-15 mb-55">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold text-gray-900 mb-8">Ekstrakurikuler</h1>
    
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Row 1 -->
            <div class="bg-blue-900 text-white p-10 flex items-center rounded">
                <i class="fas fa-school mr-3 text-xl"></i>
                <span class="font-medium text-lg">OSIS</span>
            </div>
            
            <div class="bg-purple-700 text-white p-10 flex items-center rounded">
                <i class="fas fa-campground mr-3 text-xl"></i>
                <span class="font-medium text-lg">Pramuka</span>
            </div>
            
            <div class="bg-blue-600 text-white p-10 flex items-center rounded">
                <i class="fas fa-users mr-3 text-xl"></i>
                <span class="font-medium text-lg">PMR</span>
            </div>
            
            <div class="bg-green-500 text-white p-10 flex items-center rounded">
                <i class="fas fa-flag mr-3 text-xl"></i>
                <span class="font-medium text-lg">Paskibra</span>
            </div>
            
            <!-- Row 2 -->
            <div class="bg-teal-400 text-white p-10 flex items-center rounded">
                <i class="fas fa-camera mr-3 text-xl"></i>
                <span class="font-medium text-lg">Jurnalis</span>
            </div>
            
            <div class="bg-pink-500 text-white p-10 flex items-center rounded">
                <i class="fas fa-mountain mr-3 text-xl"></i>
                <span class="font-medium text-lg">Pecinta Alam</span>
            </div>
            
            <div class="bg-yellow-500 text-white p-10 flex items-center rounded">
                <i class="fas fa-language mr-3 text-xl"></i>
                <span class="font-medium text-lg">English Club</span>
            </div>
            
            <div class="bg-purple-800 text-white p-10 flex items-center rounded">
                <i class="fas fa-mosque mr-3 text-xl"></i>
                <span class="font-medium text-lg">IRM</span>
            </div>
            
            <!-- Row 3 -->
            <div class="bg-blue-900 text-white p-10 flex items-center rounded">
                <i class="fas fa-futbol mr-3 text-xl"></i>
                <span class="font-medium text-lg">Sepak Bola</span>
            </div>
            
            <div class="bg-purple-700 text-white p-10 flex items-center rounded">
                <i class="fas fa-basketball-ball mr-3 text-xl"></i>
                <span class="font-medium text-lg">Basket</span>
            </div>
            
            <div class="bg-blue-600 text-white p-10 flex items-center rounded">
                <i class="fas fa-volleyball-ball mr-3 text-xl"></i>
                <span class="font-medium text-lg">Volly</span>
            </div>
            
            <div class="bg-green-500 text-white p-10 flex items-center rounded">
                <i class="fas fa-music mr-3 text-xl"></i>
                <span class="font-medium text-lg">Paduan Suara</span>
            </div>
        </div>
    </div>
</div>
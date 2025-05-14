<footer class="relative overflow-hidden text-gray-50 py-16" id="wadaw">
        <!-- Background Image -->
        <img src="{{ asset('assets/bgfooter.jpeg') }}" 
         class="absolute top-0 left-0 w-full h-full object-cover z-0 brightness-75 contrast-125" 
         alt="Background Footer">
    
    <!-- Content Overlay -->
    <div class="absolute inset-0 bg-lime-600/80 z-1"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Column 1: Informasi -->
            <div class="-mb-20">
                <h3 class="text-xl font-bold mb-6">Informasi</h3>
                <ul class="space-y-4">
                    <li><a href="#" class="hover:text-gray-900 hover:font-semibold">Fasilitas</a></li>
                    <li><a href="#" class="hover:text-gray-900 hover:font-semibold">Struktur Organisasi</a></li>
                    <li><a href="#" class="hover:text-gray-900 hover:font-semibold">Kalender Pendidikan</a></li>
                    <li><a href="#" class="hover:text-gray-900 hover:font-semibold">PPDB</a></li>
                </ul>
            </div>

            <!-- Column 2: Tentang -->
            <div class="-mb-20">
                <h3 class="text-xl font-bold mb-6">Tentang</h3>
                <ul class="space-y-4">
                    <li><a href="{{ route('tentang.sejarah') }}" class="hover:text-gray-900 hover:font-semibold">Sejarah</a></li>
                    <li><a href="{{ route('tentang.visimisi') }}" class="hover:text-gray-900 hover:font-semibold">Visi dan Misi</a></li>
                </ul>
            </div>

            <!-- Column 3: Kontak -->
            <div class="-mb-20 -ml-15">
                <h3 class="text-xl font-bold mb-6">Kontak</h3>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        Jl. Babakan Sari No.126,<br>Babakan Sari, Kec. Kiaracondong,<br>Kota Bandung, Jawa Barat 40283
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone mr-2"></i>
                        (022) 7102018
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-mobile-alt mr-2"></i>
                        +62 858-606-222
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope mr-2"></i>
                        <a href="mailto:tkasysyifa2bdg@gmail.com"
                            class="hover:text-gray-900 hover:font-semibold">tkasysyifa2bdg@gmail.com</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-clock mr-2"></i>
                        Senin : 09:00 - 14:00
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-clock mr-2"></i>
                        Selasa - Jumat : 08:00 - 14:00
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-clock mr-2"></i>
                        Sabtu - Minggu: Tutup
                    </li>
                </ul>
            </div>

            <!-- Column 4: Map -->
            <div class="-mb-20">
                <div class="bg-white rounded-md overflow-hidden w-full h-[300px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7178428334078!2d107.65051857480951!3d-6.924293193075399!2m3!1f0!2f0!3f0
                    !3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7e24c122d73%3A0xc708058011285444!2sTK%20Asy%20Syifa%202!5e0!3m2!1sid!2sid!4v1747120191764!5m2!1sid!2sid"
                        class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="mt-4 text-sm">
                    <p class="mb-2">Kunjungi kami di lokasi:</p>
                    <a href="https://maps.google.com/maps/dir//TK+Asy+Syifa+2+Jl.+Babakan+Sari+No.126+Babakan+Sari+Kec.+Kiaracondong,+Kota+Bandung,+Jawa+Barat+40283/@-6.9242932,107.6530935,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x2e68e7e24c122d73:0xc708058011285444"
                        class="text-gray-50 font-bold hover:text-gray-900 hover:font-semibold flex items-center">
                        <i class="fas fa-directions mr-2"></i>
                        Dapatkan Petunjuk Arah
                    </a>
                </div>
            </div>
        </div>

        <!-- Sosmed & Copyright -->
        <div class="mt-25 pt-8 border-t-2 border-gray-50">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex flex-col items-center md:items-start mb-6 md:mb-0">
                    <h4 class="text-lg font-semibold mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/people/TK-Asy-Syifa-2-Bandung/100063806730438/"
                            class="w-10 h-10 rounded-full border border-white flex items-center justify-center hover:bg-blue-800 transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://youtube.com/@tkasysyifabandung8857?feature=shared"
                            class="w-10 h-10 rounded-full border border-white flex items-center justify-center hover:bg-red-600 transition-colors duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://www.instagram.com/tkasysyifa2?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            class="w-10 h-10 rounded-full border border-white flex items-center justify-center hover:bg-orange-700 transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full border border-white flex items-center justify-center hover:bg-black transition-colors duration-300">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-6">
                    <p class="text-center mt-10 text-sm text-white font-semibold">&copy; 2025 TK AS-SYIFA 2. All rights
                        reserved.</p>
                </div>
            </div>
        </div>

    </div>
</footer>

    <!-- Scroll to top button -->
    <button class="scroll-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>

    <script>
      // Scroll to top functionality
      const scrollBtn = document.querySelector('.scroll-to-top');
      
      window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
          scrollBtn.classList.add('active');
        } else {
          scrollBtn.classList.remove('active');
        }
      });

      scrollBtn.addEventListener('click', () => {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    </script>
  </body>
</html>
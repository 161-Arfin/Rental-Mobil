<x-app-layout>
    <div class="min-h-screen pt-28 bg-gradient-to-b from-[#0a0f1f] via-[#162447] to-[#0a0f1f] text-gray-100">

        <!-- HERO SECTION -->
        <section class="text-center py-20 px-6" data-aos="fade-down" data-aos-duration="1000">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Tentang Kami</h1>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto leading-relaxed">
                Kami hadir untuk memberikan kemudahan dan kenyamanan dalam menyewa mobil impian Anda. 
                Rental Mobil kami menyediakan berbagai jenis kendaraan terbaik dengan layanan profesional dan harga kompetitif.
            </p>
        </section>

        <!-- OUR STORY -->
        <section class="max-w-6xl mx-auto px-6 py-12 md:py-20 grid md:grid-cols-2 gap-10 items-center text-center md:text-left">
            <div data-aos="fade-right" data-aos-duration="900">
                <img src="{{ asset('images/about-us.jpg') }}" alt="Tentang Kami" 
                     class="rounded-2xl shadow-2xl border border-gray-700 w-full h-80 object-cover">
            </div>
            <div data-aos="fade-left" data-aos-duration="900">
                <h2 class="text-3xl font-semibold text-white mb-4">Cerita Kami</h2>
                <p class="text-gray-400 leading-relaxed mb-6">
                    Berawal dari kebutuhan masyarakat akan transportasi yang nyaman dan terpercaya, kami membangun platform Rental Mobil modern yang mudah diakses kapan pun dan di mana pun.
                    Fokus kami adalah memberikan pelayanan terbaik, mulai dari pemesanan, pengantaran, hingga pengembalian kendaraan.
                </p>
                <a href="{{ route('cars') }}" class="inline-block bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg text-white font-medium transition">
                    Lihat Mobil Kami
                </a>
            </div>
        </section>

        <!-- VALUES SECTION -->
        <section class="bg-gray-900/30 backdrop-blur-md border-t border-gray-800 py-16">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-semibold text-white mb-12">Nilai dan Komitmen Kami</h2>

                <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
                    @foreach([
                        ['title' => 'Keamanan & Kenyamanan', 'desc' => 'Kami memastikan setiap mobil dalam kondisi prima, terawat, dan aman untuk perjalanan Anda.'],
                        ['title' => 'Pelayanan Profesional', 'desc' => 'Tim kami siap membantu dengan pelayanan cepat, ramah, dan transparan.'],
                        ['title' => 'Harga Terjangkau', 'desc' => 'Nikmati layanan terbaik dengan harga kompetitif tanpa biaya tersembunyi.']
                    ] as $value)
                        <div data-aos="fade-up" data-aos-duration="800"
                             class="bg-gray-800/60 border border-gray-700 rounded-2xl p-6 hover:scale-[1.03] hover:shadow-blue-500/30 transition-all duration-300">
                            <h3 class="text-xl font-bold text-white mb-2">{{ $value['title'] }}</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">{{ $value['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CONTACT CTA -->
        <section class="text-center py-20 px-6">
            <h2 class="text-3xl font-semibold text-white mb-4">Ingin Menyewa atau Bertanya?</h2>
            <p class="text-gray-400 mb-8">Hubungi kami untuk mendapatkan informasi lebih lanjut tentang layanan kami.</p>
            <a href="{{ route('contact') }}" 
               class="inline-block bg-blue-600 hover:bg-blue-700 px-8 py-3 rounded-lg text-white font-medium transition">
               Hubungi Kami
            </a>
        </section>

    </div>
</x-app-layout>

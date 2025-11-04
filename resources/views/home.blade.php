<x-app-layout>
    <div class="min-h-screen bg-gradient-to-b from-[#0a0f1f] via-[#162447] to-[#0a0f1f] text-gray-100">

        <!-- HERO SECTION -->
        <section class="relative flex flex-col items-center justify-center text-center px-6 pt-28 pb-32 overflow-hidden">
            <!-- Background mobil -->
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1525609004556-c46c7d6cf023?auto=format&fit=crop&w=1950&q=80')] bg-cover bg-center opacity-20"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0f1f]/70 via-[#162447]/70 to-[#0a0f1f]/90"></div>

            <!-- Konten Hero -->
            <div class="relative z-10 max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-4 drop-shadow-lg">
                    Sewa Mobil Jadi Mudah dan Elegan 🚗
                </h1>
                <p class="text-gray-300 text-lg md:text-xl mb-8 leading-relaxed">
                    Pilih mobil impianmu, pesan dengan cepat, dan nikmati perjalanan tanpa batas.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold shadow-lg hover:shadow-blue-500/40 transition-all duration-300">
                        Mulai Sekarang
                    </a>
                    <a href="#highlight" class="border border-blue-400 text-blue-400 hover:bg-blue-600 hover:text-white px-8 py-3 rounded-lg font-semibold transition-all duration-300">
                        Lihat Mobil Unggulan
                    </a>
                </div>
            </div>

            <!-- Glow center -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 w-[700px] h-[700px] bg-blue-500/10 rounded-full blur-3xl"></div>
        </section>

        <!-- HIGHLIGHT SECTION -->
        <section id="highlight" class="py-24 px-6 bg-gray-900/40 backdrop-blur-sm">
            <div class="max-w-6xl mx-auto text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-400 mb-3">Mobil Terbaru</h2>
                <p class="text-gray-400">Highlight mobil baru yang baru saja kami tambahkan ke koleksi kami</p>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

                @forelse ($cars as $car)
                    <div data-aos="fade-up" data-aos-duration="900" class="bg-gray-800/80 border border-gray-700 rounded-2xl overflow-hidden shadow-lg hover:scale-[1.03] hover:shadow-blue-500/30 transition-all duration-300 group">
                        <div class="relative">
                            <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" class="w-full h-56 object-cover group-hover:opacity-90 transition">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
                        </div>
                        <div class="p-6 text-left">
                            <h3 class="text-xl font-bold text-white mb-2">{{ $car->name }}</h3>
                            <p class="text-gray-400 text-sm mb-3">{{ $car->brand }}</p>
                            <p class="text-blue-400 font-semibold mb-1">Rp {{ number_format($car->price_per_day, 0, ',', '.')}}/hari</p>
                            <p class="text-gray-400 text-xs mb-3">Tahun {{ $car->year }}</p>
                            <p class="text-gray-500 text-sm mb-4">{{ Str::limit($car->description, 80) }}</p>
                            @auth
                                <a href="{{ route('cars') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg text-sm transition">Sewa Sekarang</a>
                            @else
                                <a href="{{ route('login') }}" class="inline-block border border-blue-500 text-blue-400 hover:bg-blue-600 hover:text-white px-5 py-2 rounded-lg text-sm transition">Login untuk Sewa</a>
                            @endauth
                        </div>
                    </div>
                @empty
                    <p class="text-gray-400 col-span-3 text-center">Tidak ada mobil tersedia saat ini.</p>
                @endforelse
            </div>
        </section>

        <!-- CTA SECTION -->
        <section class="py-24 text-center bg-gray-950/60 border-t border-gray-800">
            <h2 class="text-3xl font-bold text-white mb-4">Siap untuk Berangkat?</h2>
            <p class="text-gray-400 mb-8">Pesan mobil terbaik untuk perjalanan bisnis, liburan, atau kebutuhan harian Anda.</p>
            <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold shadow-lg hover:shadow-blue-500/40 transition">
                Pesan Sekarang
            </a>
        </section>

    </div>
</x-app-layout>

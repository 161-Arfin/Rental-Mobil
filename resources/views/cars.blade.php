<x-app-layout>

    <div class="min-h-screen pt-28 bg-gradient-to-b from-[#0a0f1f] via-[#162447] to-[#0a0f1f] text-gray-100">
        
        <!-- HERO / HEADER -->
        <section class="relative text-center py-20 px-6">
            <h1 class="text-4xl md:text-5xl font-bold text-white drop-shadow-lg mb-4"> Temukan Mobil yang Kamu Butuhkan</h1>
            <p class="text-gray-400 text-lg"> Pilih dari berbagai kategori mobil — SUV, City Car, Offroad, MPV, dan lainnya </p>
        </section> 
        
        <!-- FILTER & SEARCH -->
        <section
            class="max-w-6xl mx-auto px-1 py-8 bg-gray-900/40 backdrop-blur-md rounded-2xl border border-gray-800 shadow-lg mb-20">
            <div class="flex flex-col gap-6"> 
                
                <!-- Search -->
                <div class="flex justify-center"> <input type="text" id="searchInput" placeholder="Cari mobil..."
                        class="w-full md:w-1/2 px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-gray-200 placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-200 shadow-inner">
                </div> 
                
                <!-- Filter kategori -->
                <div class="flex flex-wrap justify-center gap-4">
                    @foreach (['Semua', 'SUV', 'City Car', 'Offroad', 'MPV', 'Sedan'] as $type)
                        <button data-filter="{{ strtolower($type) }}"
                            class="filter-btn px-5 py-2 text-sm rounded-full border border-gray-700 bg-gray-800 hover:bg-blue-600 hover:text-white transition duration-200">
                            {{ $type }} </button>
                    @endforeach
                </div>
            </div>
        </section> 
        
        <!-- GRID MOBIL -->
        <section class="max-w-6xl mx-auto px-2 pb-24 pt-4">
            <div id="carGrid" class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">

                @forelse ($cars as $car)
                    <div data-aos="fade-up" data-aos-duration="800"
                        class="car-card bg-gray-800/70 border border-gray-700 rounded-2xl overflow-hidden shadow-lg hover:scale-[1.03] hover:shadow-blue-500/30 transition-all duration-300 group"
                        data-type="{{ strtolower($car->type) }}">
                        <div class="relative"> <img src="{{ asset('storage/' . $car->image) }}"
                                alt="{{ $car->name }}"
                                class="w-full h-56 object-cover group-hover:opacity-90 transition">
                            <div
                                class="absolute top-3 left-3 bg-blue-600 text-xs px-3 py-1 rounded-full uppercase tracking-wide">
                                {{ $car->type }}</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-white mb-2">{{ $car->name }}</h3>
                            <p class="text-gray-400 text-sm mb-3">{{ $car->brand }}</p>
                            <p class="text-blue-400 font-semibold mb-1">Rp{{ number_format($car->price_per_day, 0, ',', '.') }}/hari</p>
                            <p class="text-gray-400 text-xs mb-3">Tahun {{ $car->year }}</p>
                            <p class="text-gray-500 text-sm mb-4">{{ Str::limit($car->description, 80) }}</p> @auth
                                
                            <a href="{{ route('booking.create', $car->id) }}" class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-medium transition">Sewa Sekarang</a>
                @else
                    <a href="{{ route('login') }}" class="block w-full border border-blue-500 text-blue-400 hover:bg-blue-600 hover:text-white py-2 rounded-lg text-center font-medium transition">Login untuk Sewa</a> @endauth
                    </div>
                </div> 

                @empty 
                    <p class="text-center text-gray-400 col-span-full">Belum ada mobil yang tersedia saat ini.</p>
                @endforelse
            </div>
        </section>
    </div> 
    
    <!-- Script pencarian dan filter -->
    <script>
        const searchInput = document.getElementById('searchInput');
        const filterButtons = document.querySelectorAll('.filter-btn');
        const carCards = document.querySelectorAll('.car-card'); // Pencarian realtime searchInput.addEventListener('keyup', function() { const keyword = this.value.toLowerCase(); carCards.forEach(card => { const name = card.querySelector('h3').textContent.toLowerCase(); card.style.display = name.includes(keyword) ? 'block' : 'none'; }); }); // Filter kategori filterButtons.forEach(btn => { btn.addEventListener('click', () => { const filter = btn.getAttribute('data-filter'); filterButtons.forEach(b => b.classList.remove('bg-blue-600', 'text-white')); btn.classList.add('bg-blue-600', 'text-white'); carCards.forEach(card => { if (filter === 'semua' || card.dataset.type === filter) { card.style.display = 'block'; } else { card.style.display = 'none'; } }); }); }); 
    </script>

</x-app-layout>

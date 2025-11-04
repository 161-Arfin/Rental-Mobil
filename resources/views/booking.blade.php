<x-app-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-[#0a0f1f] via-[#162447] to-[#0a0f1f] text-gray-100 px-4 py-16">

        <!-- POPUP FORM -->
        <div class="bg-gray-900 border border-gray-700 rounded-2xl shadow-2xl w-full max-w-md p-8 relative">
            <a href="{{ url('/cars') }}" class="absolute top-3 right-4 text-gray-400 hover:text-white text-xl">&times;</a>

            <h2 class="text-2xl font-bold text-white text-center mb-6">Form Sewa Mobil</h2>

            <!-- Detail mobil -->
            <div class="flex items-center gap-4 mb-6 border-b border-gray-700 pb-4">
                <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" class="w-24 h-16 object-cover rounded-md">
                <div>
                    <h3 class="text-lg font-semibold">{{ $car->name }}</h3>
                    <p class="text-gray-400 text-sm">{{ $car->brand }} • {{ $car->type }}</p>
                    <p class="text-blue-400 text-sm font-semibold">Rp {{ number_format($car->price_per_day, 0, ',', '.') }}/hari</p>
                </div>
            </div>

            <!-- Form sewa -->
            <form action="{{ route('booking.store') }}" method="POST" x-data="{ total: 0 }" class="space-y-5">
                @csrf
                <input type="hidden" name="car_id" value="{{ $car->id }}">

                <div>
                    <label class="text-gray-300 block mb-1">Tanggal Mulai</label>
                    <input type="date" name="start_date" id="start_date"
                        class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-gray-100 focus:ring-2 focus:ring-blue-500 outline-none">
                </div>

                <div>
                    <label class="text-gray-300 block mb-1">Tanggal Selesai</label>
                    <input type="date" name="end_date" id="end_date"
                        class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-gray-100 focus:ring-2 focus:ring-blue-500 outline-none">
                </div>

                <div>
                    <label class="text-gray-300 block mb-1">Catatan (Opsional)</label>
                    <textarea name="notes" rows="2"
                        class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-gray-100 focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
                </div>

                <!-- Total Harga -->
                <div class="pt-2 border-t border-gray-700">
                    <p class="text-gray-400 text-sm mb-1">Total Harga:</p>
                    <h3 id="totalHarga" class="text-xl font-bold text-blue-400">Rp 0</h3>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold transition">
                    Konfirmasi Sewa
                </button>
            </form>
        </div>

    </div>

    <script>
        // Auto hitung total harga sewa
        const startInput = document.getElementById('start_date');
        const endInput = document.getElementById('end_date');
        const totalDisplay = document.getElementById('totalHarga');
        const pricePerDay = {{ $car->price_per_day }};

        function hitungTotal() {
            if (startInput.value && endInput.value) {
                const start = new Date(startInput.value);
                const end = new Date(endInput.value);
                const days = Math.floor((end - start) / (1000 * 60 * 60 * 24)) + 1;
                if (days > 0) {
                    const total = days * pricePerDay;
                    totalDisplay.textContent = 'Rp ' + total.toLocaleString('id-ID');
                } else {
                    totalDisplay.textContent = 'Tanggal tidak valid';
                }
            }
        }

        startInput.addEventListener('change', hitungTotal);
        endInput.addEventListener('change', hitungTotal);
    </script>
</x-app-layout>

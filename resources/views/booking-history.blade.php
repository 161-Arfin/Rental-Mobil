<x-app-layout>
    <div class="min-h-screen pt-28 bg-gradient-to-b from-[#0a0f1f] via-[#162447] to-[#0a0f1f] text-gray-100 py-16 px-6">

        <!-- ALERT PESAN -->
        @if (session('success'))
            <div x-data="{ show: true }" x-show="show" x-transition
                class="fixed top-5 right-5 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg z-50">
                <span class="font-semibold">{{ session('success') }}</span>
                <button @click="show = false" class="ml-3 text-white font-bold">&times;</button>
            </div>
        @endif

        <!-- JUDUL -->
        <div class="max-w-6xl mx-auto mb-10 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Riwayat Booking Saya</h1>
            <p class="text-gray-400">Lihat semua pemesanan mobil yang pernah kamu buat</p>
        </div>

        <!-- TABEL RIWAYAT -->
        <div class="max-w-6xl mx-auto bg-gray-900/60 border border-gray-700 rounded-2xl shadow-xl p-6 overflow-x-auto">
            @if ($bookings->isEmpty())
                <p class="text-center text-gray-400 py-10">Belum ada booking yang kamu buat.</p>
            @else
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-gray-700 text-gray-300 text-sm uppercase">
                            <th class="py-3 px-4">Mobil</th>
                            <th class="py-3 px-4">Tanggal Sewa</th>
                            <th class="py-3 px-4">Durasi</th>
                            <th class="py-3 px-4">Total Harga</th>
                            <th class="py-3 px-4">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr class="border-b border-gray-800 hover:bg-gray-800/60 transition">
                                <td class="py-3 px-4 flex items-center gap-3">
                                    <!-- Gambar hanya tampil di desktop -->
                                    <img src="{{ asset('storage/' . $booking->car->image) }}"
                                        alt="{{ $booking->car->name }}"
                                        class="hidden md:block w-14 h-10 rounded object-cover">

                                    <div>
                                        <p class="font-semibold">{{ $booking->car->name }}</p>
                                        <p class="text-gray-400 text-xs">{{ $booking->car->brand }}</p>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-sm">
                                    {{ \Carbon\Carbon::parse($booking->start_date)->format('d M Y') }} -
                                    {{ \Carbon\Carbon::parse($booking->end_date)->format('d M Y') }}
                                </td>
                                <td class="py-3 px-4 text-sm">
                                    {{ (strtotime($booking->end_date) - strtotime($booking->start_date)) / 86400 + 1 }}
                                    Hari
                                </td>
                                <td class="py-3 px-4 text-blue-400 font-semibold">
                                    Rp {{ number_format($booking->total_price, 0, ',', '.') }}
                                </td>
                                <td class="py-3 px-4">
                                    @if ($booking->status == 'pending')
                                        <span
                                            class="bg-yellow-500/20 text-yellow-400 text-xs px-3 py-1 rounded-full font-semibold">Pending</span>
                                    @elseif($booking->status == 'approved')
                                        <span
                                            class="bg-green-500/20 text-green-400 text-xs px-3 py-1 rounded-full font-semibold">Disetujui</span>
                                    @else
                                        <span
                                            class="bg-gray-500/20 text-gray-400 text-xs px-3 py-1 rounded-full font-semibold">Selesai</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

    </div>
</x-app-layout>

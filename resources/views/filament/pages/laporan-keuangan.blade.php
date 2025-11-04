<x-filament-panels::page>

    <div class="space-y-6">
        {{-- 🔍 Filter Form --}}
        <form wire:submit.prevent="filter" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            {{ $this->form }}
            <div class="col-span-full">
                <x-filament::button type="submit" color="primary">
                    Filter
                </x-filament::button>
            </div>
        </form>

        {{-- 📊 Tabel Laporan --}}
        {{ $this->table }}
    </div>

    <div class="text-right text-sm text-gray-400 mt-4">
        Total Pendapatan: <span class="font-semibold text-white">
            Rp {{ number_format(\App\Models\Booking::sum('total_price'), 0, ',', '.') }}
        </span>
    </div>

</x-filament-panels::page>

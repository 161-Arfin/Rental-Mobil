<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Booking;

class RevenueChart extends ChartWidget
{
    protected ?string $heading = 'Statistik Pendapatan per Bulan';

    protected function getData(): array
    {
        // Ambil total pendapatan per bulan dari tabel bookings
        $data = Booking::selectRaw('MONTH(created_at) as month, SUM(total_price) as total')
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        $months = range(1, 12);
        $values = array_map(fn($m) => $data[$m] ?? 0, $months);

        return [
            'datasets' => [
                [
                    'label' => 'Pendapatan (Rp)',
                    'data' => $values,
                    'backgroundColor' => 'rgba(34,197,94,0.5)', // Hijau lembut
                    'borderColor' => '#22c55e',
                    'borderWidth' => 2,
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}

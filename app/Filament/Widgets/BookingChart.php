<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Booking;

class BookingChart extends ChartWidget
{
    protected ?string $heading = 'Statistik Booking per Bulan';

    protected function getData(): array
    {
        $data = Booking::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        $months = range(1, 12);
        $values = array_map(fn($m) => $data[$m] ?? 0, $months);

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Booking',
                    'data' => $values,
                    'borderColor' => '#3b82f6',
                    'backgroundColor' => 'rgba(59,130,246,0.5)',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}

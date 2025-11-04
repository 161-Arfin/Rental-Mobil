<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Car;
use App\Models\Booking;

class StatsOverview extends StatsOverviewWidget
{
    protected function getCards(): array
    {
        $totalCars = Car::count();
        $totalBookings = Booking::count();
        $totalRevenue = Booking::sum('total_price');
        $activeBookings = Booking::where('status', 'approved')->count();

        return [
            Stat::make('Total Mobil', $totalCars)
                ->icon('heroicon-o-truck')
                ->color('info'),

            Stat::make('Total Booking', $totalBookings)
                ->icon('heroicon-o-calendar-days')
                ->color('success'),

            Stat::make('Booking Aktif', $activeBookings)
                ->icon('heroicon-o-check-circle')
                ->color('warning'),

            Stat::make('Total Pendapatan', 'Rp ' . number_format($totalRevenue, 0, ',', '.'))
                ->icon('heroicon-o-banknotes')
                ->color('primary'),
        ];
    }
}

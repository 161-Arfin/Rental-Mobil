<?php

namespace App\Filament\Pages;

use App\Models\Car;
use App\Models\Booking;
use BackedEnum;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\ChartWidget;
use App\Filament\Widgets\StatsOverview;
use App\Filament\Widgets\BookingChart;
use App\Filament\Widgets\RevenueChart;

class Dashboard extends BaseDashboard
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationLabel = 'Dashboard';
    protected static ?string $title = 'Dashboard Admin';

    public function getWidgets(): array
    {
        return [
            StatsOverview::class,
            BookingChart::class,
            RevenueChart::class,
        ];
    }
}

<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use BackedEnum;
use Filament\Tables;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Actions\Action;
use App\Models\Booking;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BookingsExport;
use Illuminate\Support\Facades\Response;
use Barryvdh\DomPDF\Facade\Pdf;
use UnitEnum;

class LaporanKeuangan extends Page implements Tables\Contracts\HasTable, Forms\Contracts\HasForms
{
    use Tables\Concerns\InteractsWithTable;
    use Forms\Concerns\InteractsWithForms;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-document-text';
    protected static string|UnitEnum|null $navigationGroup = 'Laporan & Keuangan';
    protected static ?string $navigationLabel = 'Laporan & Keuangan';
    protected static ?string $title = 'Laporan & Keuangan';
    protected string $view = 'filament.pages.laporan-keuangan';

    public ?string $startDate = null;
    public ?string $endDate = null;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\DatePicker::make('startDate')->label('Dari Tanggal'),
                Forms\Components\DatePicker::make('endDate')->label('Sampai Tanggal'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(fn () => Booking::query()
                ->when($this->startDate, fn ($q) => $q->whereDate('created_at', '>=', $this->startDate))
                ->when($this->endDate, fn ($q) => $q->whereDate('created_at', '<=', $this->endDate)))
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('user.name')->label('Nama User'),
                TextColumn::make('car.name')->label('Mobil'),
                TextColumn::make('start_date')->label('Mulai')->date(),
                TextColumn::make('end_date')->label('Selesai')->date(),
                TextColumn::make('total_price')->label('Total Harga')->money('IDR', true),
                BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'approved',
                        'danger' => 'cancelled',
                    ])
                    ->label('Status'),
            ])
            ->defaultSort('created_at', 'desc')
            ->headerActions([
                Action::make('export_csv')
                    ->label('Export CSV')
                    ->icon('heroicon-o-document-arrow-down')
                    ->action(fn () => $this->exportCsv()),

                Action::make('export_pdf')
                    ->label('Export PDF')
                    ->icon('heroicon-o-document-text')
                    ->action(fn () => $this->exportPdf()),
            ]);
    }

    protected function exportCsv(string $filename = 'laporan_keuangan.csv')
    {
        $data = Booking::when($this->startDate, fn ($q) => $q->whereDate('created_at', '>=', $this->startDate))
            ->when($this->endDate, fn ($q) => $q->whereDate('created_at', '<=', $this->endDate))
            ->get();

        $callback = function () use ($data) {
            $handle = fopen('php://output', 'w');
            // header
            fputcsv($handle, ['ID', 'User', 'Mobil', 'Mulai', 'Selesai', 'Total Harga', 'Status']);

            foreach ($data as $booking) {
                fputcsv($handle, [
                    $booking->id,
                    $booking->user?->name,
                    $booking->car?->name,
                    $booking->start_date,
                    $booking->end_date,
                    $booking->total_price,
                    $booking->status,
                ]);
            }

            fclose($handle);
        };

        return Response::streamDownload($callback, $filename);
    }

    protected function exportPdf()
    {
        $bookings = Booking::with(['user', 'car'])
            ->when($this->startDate, fn ($q) => $q->whereDate('created_at', '>=', $this->startDate))
            ->when($this->endDate, fn ($q) => $q->whereDate('created_at', '<=', $this->endDate))
            ->get();

        $total = $bookings->sum('total_price');

        $pdf = Pdf::loadView('exports.bookings-pdf', [
            'bookings' => $bookings,
            'total' => $total,
            'start' => $this->startDate,
            'end' => $this->endDate,
        ])->setPaper('a4', 'portrait');

        return response()->streamDownload(fn () => print($pdf->output()), 'laporan_keuangan.pdf');
    }
}


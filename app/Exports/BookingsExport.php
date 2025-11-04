<?php

namespace App\Exports;

use App\Models\Booking;
use Illuminate\Support\Collection;
// Note: project installed an older maatwebsite/excel (v1) which does not
// provide the FromCollection/WithHeadings interfaces. Keep this class as a
// simple data container (collection() and headings()) so it can be used by
// newer versions if needed, but do not implement the interfaces here to
// avoid static analysis errors.
class BookingsExport
{
    protected $startDate;
    protected $endDate;

    public function __construct(?string $startDate = null, ?string $endDate = null)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection(): Collection
    {
        $bookings = Booking::with(['user', 'car'])
            ->when($this->startDate, fn($q) => $q->whereDate('created_at', '>=', $this->startDate))
            ->when($this->endDate, fn($q) => $q->whereDate('created_at', '<=', $this->endDate))
            ->get();

        return $bookings->map(fn($b) => [
            'ID' => $b->id,
            'User Name' => $b->user?->name ?? '',
            'Car Name' => $b->car?->name ?? '',
            'Start Date' => $b->start_date,
            'End Date' => $b->end_date,
            'Total Price' => $b->total_price,
            'Status' => ucfirst($b->status),
        ]);
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'User Name',
            'Car Name',
            'Start Date',
            'End Date',
            'Total Price',
            'Status',
        ];
    }
}

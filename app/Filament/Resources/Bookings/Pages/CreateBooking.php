<?php

namespace App\Filament\Resources\Bookings\Pages;

use App\Filament\Resources\Bookings\BookingResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateBooking extends CreateRecord
{
    protected static string $resource = BookingResource::class;

    // 🔥 Ini cara baru Filament v4 untuk ubah label tombol
    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction()
                ->label('Tambah') // ubah "Create" → "Tambah"
                ->color('primary'),

            // $this->getCreateAnotherFormAction()
            //     ->label('Tambah & tambah lagi'),

            $this->getCancelFormAction()
                ->label('Batal'),
        ];
    }


    protected function getRedirectUrl(): string
    {
        // Setelah tambah langsung ke list booking
        return $this->getResource()::getUrl('index');
    }

    protected function getCreateNotification(): ?Notification
    {
        return Notification::make()
            ->title('Data berhasil ditambahkan!')
            ->success();
    }
}

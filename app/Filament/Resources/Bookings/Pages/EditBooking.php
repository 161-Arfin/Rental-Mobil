<?php

namespace App\Filament\Resources\Bookings\Pages;

use App\Filament\Resources\Bookings\BookingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditBooking extends EditRecord
{
    protected static string $resource = BookingResource::class;

    protected function getFormActions(): array
    {
        return [
            $this->getSaveFormAction()
                ->label('Simpan') // ubah "Save" → "Simpan Perubahan"
                ->color('primary'),

            $this->getCancelFormAction()
                ->label('Batal'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        // 🔥 Langsung ke list setelah menyimpan perubahan
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Data berhasil diperbarui!')
            ->success();
    }
}

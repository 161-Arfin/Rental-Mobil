<?php

namespace App\Filament\Resources\Cars\Pages;

use App\Filament\Resources\Cars\CarResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditCar extends EditRecord
{
    protected static string $resource = CarResource::class;

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
            ->title('Data mobil berhasil diperbarui!')
            ->success();
    }
}

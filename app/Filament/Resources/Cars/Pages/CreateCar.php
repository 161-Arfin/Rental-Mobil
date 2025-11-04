<?php

namespace App\Filament\Resources\Cars\Pages;

use App\Filament\Resources\Cars\CarResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateCar extends CreateRecord
{
    protected static string $resource = CarResource::class;

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
        // Setelah tambah langsung ke list mobil
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Mobil berhasil ditambahkan!')
            ->success();
    }
}

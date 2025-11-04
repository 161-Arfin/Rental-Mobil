<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

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

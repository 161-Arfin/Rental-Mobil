<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('name')
                ->label('Nama Lengkap')
                ->required(),
            Forms\Components\TextInput::make('email')
                ->email()
                ->required(),
            Forms\Components\Toggle::make('is_active')
                ->label('Status Akun')
                ->default(true),
        ]);
    }
}

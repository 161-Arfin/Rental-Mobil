<?php

namespace App\Filament\Resources\Cars\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;


class CarForm
{
    public static function form(Schema $form): Schema
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->label('Nama Mobil')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('brand')
                ->label('Merek')
                ->required()
                ->maxLength(255),

            Forms\Components\Select::make('type')
                ->label('Tipe Mobil')
                ->options([
                    'SUV' => 'SUV',
                    'City Car' => 'City Car',
                    'MPV' => 'MPV',
                    'Off-Road' => 'Off-Road',
                ])
                ->required(),

            Forms\Components\TextInput::make('year')
                ->label('Tahun')
                ->numeric()
                ->required(),

            Forms\Components\TextInput::make('price_per_day')
                ->label('Harga / Hari')
                ->prefix('Rp')
                ->numeric()
                ->required(),

            Forms\Components\FileUpload::make('image')
                ->label('Gambar Mobil')
                ->image()
                ->directory('cars')
                ->disk('public')
                ->visibility('public')
                ->maxSize(2048),

            Forms\Components\Textarea::make('description')
                ->label('Deskripsi')
                ->rows(3),
        ]);
    }
}

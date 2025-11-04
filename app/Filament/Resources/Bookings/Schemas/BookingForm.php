<?php

namespace App\Filament\Resources\Bookings\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')
                ->label('Nama User')
                ->required(),

            Forms\Components\Select::make('car_id')
                ->relationship('car', 'name')
                ->label('Nama Mobil')
                ->required(),

            Forms\Components\DatePicker::make('start_date')
                ->label('Tanggal Mulai')
                ->required(),

            Forms\Components\DatePicker::make('end_date')
                ->label('Tanggal Selesai')
                ->required(),

            Forms\Components\TextInput::make('total_price')
                ->label('Total Harga')
                ->numeric()
                ->required(),

            Forms\Components\Select::make('status')
                ->label('Status')
                ->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'cancelled' => 'Cancelled',
                ])
                ->default('pending'),

            Forms\Components\Textarea::make('notes')
                ->label('Catatan')
                ->rows(3)
                ->nullable(),
        ]);
    }
}

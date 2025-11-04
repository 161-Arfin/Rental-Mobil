<?php

namespace App\Filament\Resources\Bookings;

use App\Filament\Resources\Bookings\Pages\CreateBooking;
use App\Filament\Resources\Bookings\Pages\EditBooking;
use App\Filament\Resources\Bookings\Pages\ListBookings;
use App\Models\Booking;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|UnitEnum|null $navigationGroup = 'Management Mobil';
    protected static ?string $navigationLabel = 'Bookings';
    protected static ?string $pluralModelLabel = 'Bookings';

    public static function getCreateRecordButtonLabel(): ?string
    {
        return 'Tambah data';
    }

    public static function form(Schema $schema): Schema
    {
        return \App\Filament\Resources\Bookings\Schemas\BookingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return \App\Filament\Resources\Bookings\Tables\BookingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBookings::route('/'),
            'create' => CreateBooking::route('/create'),
            'edit' => EditBooking::route('/{record}/edit'),
        ];
    }
}

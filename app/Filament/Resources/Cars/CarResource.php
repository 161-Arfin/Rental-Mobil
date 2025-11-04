<?php

namespace App\Filament\Resources\Cars;

use App\Filament\Resources\Cars\Pages\CreateCar;
use App\Filament\Resources\Cars\Pages\EditCar;
use App\Filament\Resources\Cars\Pages\ListCars;
use App\Filament\Resources\Cars\Schemas\CarForm;
use App\Filament\Resources\Cars\Tables\CarsTable;
use App\Models\Car;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Tables;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-truck';
    protected static string|UnitEnum|null $navigationGroup = 'Management Mobil';
    protected static ?string $navigationLabel = 'Mobil';
    protected static ?string $pluralModelLabel = 'Mobil';

    public static function getCreateRecordButtonLabel(): ?string
    {
        return 'Tambah Mobil';
    }

    public static function form(Schema $schema): Schema
    {
        return \App\Filament\Resources\Cars\Schemas\CarForm::form($schema);
    }

    public static function table(Table $table): Table
    {
        return \App\Filament\Resources\Cars\Tables\CarsTable::table($table);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCars::route('/'),
            'create' => CreateCar::route('/create'),
            'edit' => EditCar::route('/{record}/edit'),
        ];
    }
}

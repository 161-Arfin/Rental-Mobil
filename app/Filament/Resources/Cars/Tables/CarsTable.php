<?php

namespace App\Filament\Resources\Cars\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Actions\DeleteAction;
use Filament\Tables;
use Filament\Tables\Columns;


class CarsTable
{
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Foto')
                    ->disk('public')
                    ->visibility('public')
                    ->url(fn($record) => asset('storage/' . $record->image))
                    ->square()
                    ->height(60)
                    ->width(90),
                Tables\Columns\TextColumn::make('name')->label('Nama Mobil')->searchable(),
                Tables\Columns\TextColumn::make('brand')->label('Merek')->sortable(),
                Tables\Columns\TextColumn::make('type')->label('Tipe'),
                Tables\Columns\TextColumn::make('year')->label('Tahun')->sortable(),
                Tables\Columns\TextColumn::make('price_per_day')
                    ->label('Harga / Hari')
                    ->money('IDR', true),
                Tables\Columns\TextColumn::make('created_at')->dateTime('d M Y')->label('Ditambahkan'),
            ])

            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

}

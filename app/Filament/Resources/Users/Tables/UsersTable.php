<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('name')->label('Nama')->searchable(),
                TextColumn::make('email')->label('Email')->searchable(),
                BadgeColumn::make('is_active')
                    ->label('Status')
                    ->colors([
                        'success' => fn ($state): bool => $state,
                        'danger' => fn ($state): bool => !$state,
                    ])
                    ->formatStateUsing(fn ($state) => $state ? 'Aktif' : 'Nonaktif'),
                TextColumn::make('bookings_count')
                    ->label('Total Booking')
                    ->counts('bookings'),
                TextColumn::make('created_at')->label('Terdaftar')->date(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

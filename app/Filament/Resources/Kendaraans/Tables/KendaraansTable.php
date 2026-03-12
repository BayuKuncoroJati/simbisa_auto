<?php

namespace App\Filament\Resources\Kendaraans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class KendaraansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_kendaraan')->label('ID Kendaraan'),
                TextColumn::make('brand')->label('Brand Mobil')
                ->searchable(),
                TextColumn::make('model')->label('Model Mobil')
                ->searchable(),
            ])
            ->filters([
                SelectFilter::make('brand')
                ->options([
                    'Toyota' => 'Toyota',
                    'Honda' => 'Honda',
                    'Suzuki' => 'Suzuki',
                    'Daihatsu' => 'Daihatsu',
                    'Mitsubishi' => 'Mitsubishi',
                ])
                ->label('Brand Mobil')
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                // 
            ]);
    }
}

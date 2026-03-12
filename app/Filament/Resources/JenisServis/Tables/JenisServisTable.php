<?php

namespace App\Filament\Resources\JenisServis\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class JenisServisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_jenis_servis')
                ->searchable()
                ->label('ID'),
                TextColumn::make('nama_servis'),
                TextColumn::make('deskripsi_servis'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                // 
            ])
            ->toolbarActions([
                // 
            ]);
    }
}

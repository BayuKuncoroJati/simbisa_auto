<?php

namespace App\Filament\Resources\Kendaraans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KendaraanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('brand')
                ->options([
                        'Toyota' => 'Toyota',
                        'Honda' => 'Honda',
                        'Suzuki' => 'Suzuki',
                        'Daihatsu' => 'Daihatsu',
                        'Mitsubishi' => 'Mitsubishi',
                ])
                ->required()
                ->label('Brand Mobil'),
                TextInput::make('model')
                ->required()
                ->label('Model Mobil'),
            ]);
    }
}

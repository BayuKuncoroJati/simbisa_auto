<?php

namespace App\Filament\Resources\JenisServis\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JenisServisForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_servis')
                ->required()
                ->maxLength(100),
                Textarea::make('deskripsi_servis')
                ->required(),
            ]);
    }
}

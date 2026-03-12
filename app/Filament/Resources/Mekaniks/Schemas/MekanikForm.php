<?php

namespace App\Filament\Resources\Mekaniks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MekanikForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                ->required()
                ->label('Nama Lengkap'),
                TextInput::make('email')
                ->required()
                ->email()
                ->unique(ignoreRecord: true)
                ->label('Alamat Email'),
                TextInput::make('phone')
                ->required()
                ->tel()
                ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
                ->label('Nomor Telepon'),
                // TextInput::make('password')
                // ->required()
                // ->password()
                // ->minLength(8)
                // ->label('Password'),
            ]);
    }
}

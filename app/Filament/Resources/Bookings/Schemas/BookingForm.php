<?php

namespace App\Filament\Resources\Bookings\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_booking')
                ->disabledOn('edit')
                ->required(),
                TextInput::make('id_user')
                ->numeric()
                ->integer()
                ->disabledOn('edit')
                ->required(),
                TextInput::make('id_kendaraan')
                ->numeric()
                ->integer()
                ->disabledOn('edit')
                ->required(),
                TextInput::make('id_jenis_servis')
                ->numeric()
                ->integer()
                ->disabledOn('edit')
                ->required(),
                TextInput::make('nomor_plat')
                ->disabledOn('edit')
                ->required(),
                DateTimePicker::make('tanggal_booking')
                ->seconds(false)
                ->native(false)
                ->disabledOn('edit')
                ->required(),
                Select::make('status')
                ->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'rejected' => 'Rejected',
                    'completed' => 'Completed',
                ])
                ->required(),
                Textarea::make('catatan_keluhan')
                ->rows(5)
                ->disabledOn('edit'),
            ]);
    }
}

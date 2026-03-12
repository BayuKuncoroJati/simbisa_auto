<?php

namespace App\Filament\Resources\Riwayats\Pages;

use App\Filament\Resources\Riwayats\RiwayatResource;
use Filament\Resources\Pages\ListRecords;

class ListRiwayats extends ListRecords
{
    protected static ?string $title = 'Data Riwayat Servis';
    protected static string $resource = RiwayatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // 
        ];
    }
}

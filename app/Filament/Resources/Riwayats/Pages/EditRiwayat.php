<?php

namespace App\Filament\Resources\Riwayats\Pages;

use App\Filament\Resources\Riwayats\RiwayatResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRiwayat extends EditRecord
{
    protected static string $resource = RiwayatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

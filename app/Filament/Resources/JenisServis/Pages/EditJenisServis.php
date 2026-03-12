<?php

namespace App\Filament\Resources\JenisServis\Pages;

use App\Filament\Resources\JenisServis\JenisServisResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditJenisServis extends EditRecord
{
    protected static string $resource = JenisServisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

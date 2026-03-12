<?php

namespace App\Filament\Resources\Mekaniks\Pages;

use App\Filament\Resources\Mekaniks\MekanikResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMekanik extends EditRecord
{
    protected static string $resource = MekanikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

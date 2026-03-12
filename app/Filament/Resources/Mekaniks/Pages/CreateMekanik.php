<?php

namespace App\Filament\Resources\Mekaniks\Pages;

use App\Filament\Resources\Mekaniks\MekanikResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMekanik extends CreateRecord
{
    protected static string $resource = MekanikResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['role'] = 'mekanik';
        
        return $data;
    }
}

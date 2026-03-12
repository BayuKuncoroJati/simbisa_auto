<?php

namespace App\Filament\Resources\JenisServis\Pages;

use App\Filament\Resources\JenisServis\JenisServisResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJenisServis extends ListRecords
{
    protected static ?string $title = 'Data Jenis Servis';
    protected static string $resource = JenisServisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label('Create New Jenis Servis'),
        ];
    }
}

<?php

namespace App\Filament\Resources\Mekaniks\Pages;

use App\Filament\Resources\Mekaniks\MekanikResource;
use App\Filament\Resources\Mekaniks\Widgets\MekanikCountOverview;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMekaniks extends ListRecords
{
    protected static string $resource = MekanikResource::class;

    protected static ?string $title = 'Data Mekanik';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label('Create New Mekanik'),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            MekanikCountOverview::class,
        ];
    }
}

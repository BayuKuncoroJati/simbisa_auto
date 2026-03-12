<?php

namespace App\Filament\Resources\Admins\Pages;

use App\Filament\Resources\Admins\AdminResource;
use App\Filament\Resources\Admins\Widgets\AdminCountOverview;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAdmins extends ListRecords
{
    protected static ?string $title = 'Data Admin';
    protected static string $resource = AdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label('Create New Admin'),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            AdminCountOverview::class,
        ];
    }
}

<?php

namespace App\Filament\Resources\Customers\Pages;

use App\Filament\Resources\Customers\CustomerResource;
use App\Filament\Resources\Customers\Widgets\CustomerCountOverview;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;

    protected static ?string $title = 'Data Customer';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label('Create New Customer'),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            CustomerCountOverview::class,
        ];
    }
}

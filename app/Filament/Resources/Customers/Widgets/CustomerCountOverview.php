<?php

namespace App\Filament\Resources\Customers\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CustomerCountOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Customer', User::where('role', 'customer')->count())
            ->icon('heroicon-o-user-group'),
        ];
    }
}

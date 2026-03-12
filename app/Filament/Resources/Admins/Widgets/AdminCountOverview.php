<?php

namespace App\Filament\Resources\Admins\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminCountOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Admin', User::where('role', 'admin')->count())
            ->icon('heroicon-o-user'),
        ];
    }
}

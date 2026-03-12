<?php

namespace App\Filament\Resources\Mekaniks\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MekanikCountOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Mekanik', User::where('role', 'mekanik')->count())
            ->icon('heroicon-o-user-group'),
        ];
    }
}

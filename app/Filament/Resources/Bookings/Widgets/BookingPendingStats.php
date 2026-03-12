<?php

namespace App\Filament\Resources\Bookings\Widgets;

use App\Models\Booking;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookingPendingStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Pending Status', Booking::where('status', 'pending')
            ->count())
            ->description('Menunggu Tindak Lanjut')
            ->descriptionIcon('heroicon-o-clock')
            ->color('danger')
            ->icon('heroicon-o-clipboard-document-list'),
        ];
    }
}

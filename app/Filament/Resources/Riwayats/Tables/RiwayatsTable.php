<?php

namespace App\Filament\Resources\Riwayats\Tables;

use Filament\Actions\Action;
use Filament\Actions\ViewAction;
use Filament\Schemas\Components\View;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class RiwayatsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('booking.kode_booking')
                    ->searchable()
                    ->label('Kode Booking'),
                TextColumn::make('booking.tanggal_booking')
                    ->dateTime('d M Y, H:i')
                    ->suffix(' WIB')
                    ->label('Tanggal Booking'),
                TextColumn::make('customer.nama')
                    ->label('Nama Customer'),
                TextColumn::make('mekanik.id_user')
                    ->label('ID Mekanik'),
                TextColumn::make('mekanik.nama')
                    ->label('Handled by (Nama Mekanik)'),
                TextColumn::make('total_biaya')
                    ->label('Total Biaya')
                    ->money('IDR', locale: 'id', decimalPlaces: 0),
                TextColumn::make('booking.status')
                    ->badge()
                    ->label('Status'),
            ])
            ->headerActions([
                Action::make('cetak_laporan')
                    ->label('Cetak Laporan')
                    ->icon('heroicon-o-printer')
                    ->color('info')
                    ->modalHeading('Cetak Laporan Riwayat Servis')
                    ->modalSubmitAction(false)
                    ->modalWidth('screen')
                    ->visible(function ($livewire) {

                        $filter = $livewire->tableFilters['tanggal_booking'] ?? null;

                        return filled($filter['tanggal_mulai'] ?? null) ||
                            filled($filter['tanggal_selesai'] ?? null);
                    })
                    ->schema([
                        View::make('filament.laporan.riwayat-servis')
                            ->viewData(function ($livewire) {

                                $filter = $livewire->tableFilters['tanggal_booking'] ?? [];

                                return [
                                    'tanggal_mulai' => $filter['tanggal_mulai'] ?? null,
                                    'tanggal_selesai' => $filter['tanggal_selesai'] ?? null,
                                    'query' => $livewire
                                        ->getFilteredTableQuery()
                                        ->with(['booking', 'customer', 'mekanik'])
                                        ->distinct('id_booking_detail')
                                        ->get(),
                                ];
                            }),
                    ])
                    ->extraModalFooterActions([
                        Action::make('print')
                            ->label('Cetak')
                            ->icon('heroicon-o-printer')
                            ->color('info')
                            ->extraAttributes([
                                'onclick' => 'window.print()'
                            ])
                    ])
            ])
            ->defaultSort('id_booking_detail', 'desc')
            ->filters([
                Filter::make('tanggal_booking')
                    ->form([
                        DatePicker::make('tanggal_mulai')
                            ->label('Tanggal Mulai'),

                        DatePicker::make('tanggal_selesai')
                            ->label('Tanggal Selesai'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->whereHas('booking', function (Builder $query) use ($data) {
                            $query
                                ->when(
                                    $data['tanggal_mulai'],
                                    fn(Builder $query, $date) => $query->whereDate('tanggal_booking', '>=', $date),
                                )
                                ->when(
                                    $data['tanggal_selesai'],
                                    fn(Builder $query, $date) => $query->whereDate('tanggal_booking', '<=', $date),
                                );
                        });
                    })
                    ->label('Filter Tanggal Booking'),
            ])
            ->recordActions([
                ViewAction::make()
                    ->modalHeading('Riwayat Servis')
                    ->modalSubmitAction(false)
                    ->modalCancelAction(false)
                    ->schema([
                        View::make('filament.riwayat-servis.riwayat-servis-table')
                    ])
                    ->modalWidth('2xl')
                    ->label('Detail Riwayat')
                    ->extraModalFooterActions([
                        Action::make('cetak')
                            ->label('Cetak')
                            ->icon('heroicon-o-printer')
                            ->color('info')
                            ->extraAttributes([
                                'onclick' => 'window.print()'
                            ])
                    ]),
            ])
            ->toolbarActions([
                //
            ]);
    }
}

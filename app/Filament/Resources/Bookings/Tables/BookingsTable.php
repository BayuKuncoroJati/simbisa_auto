<?php

namespace App\Filament\Resources\Bookings\Tables;

use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\View;
use Filament\Support\RawJs;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\DB;

class BookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->poll('6s')
            ->striped()
            ->columns([
                TextColumn::make('kode_booking')
                    ->searchable(),
                TextColumn::make('user.nama')
                    ->label('Nama Customer')
                    ->searchable(),
                TextColumn::make('user.phone')
                    ->label('Nomor Telepon'),
                TextColumn::make('kendaraan.model')
                    ->label('Model Kendaraan'),
                TextColumn::make('nomor_plat')
                    ->label('Nomor Plat')
                    ->searchable(),
                TextColumn::make('tanggal_booking')
                    ->badge()
                    ->color('primary')
                    ->dateTime('d M Y, H:i')
                    ->suffix(' WIB')
                    ->label('Tanggal Booking'),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'pending' => 'warning',
                        'approved' => 'info',
                        'rejected' => 'danger',
                        'completed' => 'success',
                    }),
            ])
            ->defaultSort('id_booking', 'desc')
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                        'completed' => 'Completed',
                    ])
            ])
            ->recordActions([
                ViewAction::make()
                    ->modalHeading('Data Booking')
                    ->modalSubmitAction(false)
                    ->schema([
                        View::make('filament.bookings.booking-detail-table'),
                    ])
                    ->modalWidth('xl'),

                Action::make('updateStatus')
                    ->icon('heroicon-o-scale')
                    ->label('Decision')
                    ->visible(fn(Booking $record) => $record->status === 'pending')
                    ->form([
                        Select::make('status')
                            ->label('Keputusan')
                            ->options([
                                'approved' => 'Approved',
                                'rejected' => 'Rejected',
                            ])
                            ->required(),
                    ])
                    ->action(function (array $data, Booking $record): void {
                        $record->update([
                            'status' => $data['status'],
                        ]);
                    }),

                Action::make('completedStatus')
                    ->icon('heroicon-o-check-badge')
                    ->label('Completed')
                    ->visible(fn(Booking $record) => $record->status === 'approved')
                    ->schema([
                        Hidden::make('id_booking')
                            ->default(fn($record) => $record->id_booking),
                        Hidden::make('id_user')
                            ->default(fn($record) => $record->id_user),
                        Select::make('handled_by')
                            ->label('Handled by (Nama Mekanik)')
                            ->options(User::where('role', 'mekanik')->pluck('nama', 'id_user'))
                            ->required(),
                        Select::make('status')
                            ->label('Selesaikan Booking')
                            ->options([
                                'completed' => 'Completed',
                            ])
                            ->required(),
                        Textarea::make('catatan_perbaikan')
                            ->label('Catatan Dari Mekanik')
                            ->rows(5)
                            ->required(),
                        TextInput::make('total_biaya')
                            ->label('Total Biaya')
                            ->prefix('Rp')
                            ->mask(RawJs::make('$money($input)'))
                            ->stripCharacters(',')
                            ->required(),
                    ])
                    ->action(function (Booking $record, array $data): void {

                        DB::transaction(function () use ($record, $data) {

                            $record->update([
                                'status' => $data['status'],
                            ]);

                            BookingDetail::create([
                                'id_booking' => $record->id_booking,
                                'id_user' => $data['id_user'],
                                'handled_by' => $data['handled_by'],
                                'catatan_perbaikan' => $data['catatan_perbaikan'],
                                'total_biaya' => $data['total_biaya'],
                            ]);
                        });
                    })
                    ->slideOver(),
            ]);
    }
}

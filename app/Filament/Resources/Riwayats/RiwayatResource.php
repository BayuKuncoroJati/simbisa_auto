<?php

namespace App\Filament\Resources\Riwayats;

use App\Filament\Resources\Riwayats\Pages\CreateRiwayat;
use App\Filament\Resources\Riwayats\Pages\EditRiwayat;
use App\Filament\Resources\Riwayats\Pages\ListRiwayats;
use App\Filament\Resources\Riwayats\Schemas\RiwayatForm;
use App\Filament\Resources\Riwayats\Tables\RiwayatsTable;
use App\Models\BookingDetail;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class RiwayatResource extends Resource
{
    protected static ?string $model = BookingDetail::class;

    protected static string|UnitEnum|null $navigationGroup = 'Transaksi';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel = 'Riwayat Servis';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClock;

    protected static ?string $recordTitleAttribute = 'Data Riwayat';

    public static function form(Schema $schema): Schema
    {
        return RiwayatForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RiwayatsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRiwayats::route('/'),
            'create' => CreateRiwayat::route('/create-booking-detail'),
            // 'edit' => EditRiwayat::route('/{record}/edit-booking-detail'),
        ];
    }

    public static function getBreadcrumb(): string
    {
        return 'Data Riwayat Servis';
    }
}

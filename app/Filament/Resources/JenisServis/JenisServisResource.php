<?php

namespace App\Filament\Resources\JenisServis;

use App\Filament\Resources\JenisServis\Pages\CreateJenisServis;
use App\Filament\Resources\JenisServis\Pages\EditJenisServis;
use App\Filament\Resources\JenisServis\Pages\ListJenisServis;
use App\Filament\Resources\JenisServis\Schemas\JenisServisForm;
use App\Filament\Resources\JenisServis\Tables\JenisServisTable;
use App\Models\JenisServis;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class JenisServisResource extends Resource
{
    protected static ?string $model = JenisServis::class;
    protected static string|UnitEnum|null $navigationGroup = 'Master Data';
    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Data Jenis Servis';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedWrenchScrewdriver;

    protected static ?string $recordTitleAttribute = 'Data Jenis Servis';

    public static function getBreadcrumb(): string
    {
        return 'Data Jenis Servis';
    }
    public static function form(Schema $schema): Schema
    {
        return JenisServisForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JenisServisTable::configure($table);
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
            'index' => ListJenisServis::route('/'),
            'create' => CreateJenisServis::route('/create'),
            // 'edit' => EditJenisServis::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\Mekaniks;

use App\Filament\Resources\Mekaniks\Pages\CreateMekanik;
use App\Filament\Resources\Mekaniks\Pages\EditMekanik;
use App\Filament\Resources\Mekaniks\Pages\ListMekaniks;
use App\Filament\Resources\Mekaniks\Schemas\MekanikForm;
use App\Filament\Resources\Mekaniks\Tables\MekaniksTable;
use App\Filament\Resources\Mekaniks\Widgets\MekanikCountOverview;
use App\Models\User;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use UnitEnum;

class MekanikResource extends Resource
{
    protected static ?string $model = User::class;

    protected static string|UnitEnum|null $navigationGroup = 'Manajemen User';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationLabel = 'Data Mekanik';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static ?string $recordTitleAttribute = 'Data Mekanik';

    public static function form(Schema $schema): Schema
    {
        return MekanikForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MekaniksTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getBreadcrumb(): string
    {
        return 'Data Mekanik';
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('role', 'mekanik');
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMekaniks::route('/'),
            'create' => CreateMekanik::route('/create-mekanik'),
            // 'edit' => EditMekanik::route('/{record}/edit-mekanik'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            MekanikCountOverview::class,
        ];
    }
}

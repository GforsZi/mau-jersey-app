<?php

namespace App\Filament\Resources\JerseyPrimaryColors;

use App\Filament\Resources\JerseyPrimaryColors\Pages\CreateJerseyPrimaryColor;
use App\Filament\Resources\JerseyPrimaryColors\Pages\EditJerseyPrimaryColor;
use App\Filament\Resources\JerseyPrimaryColors\Pages\ListJerseyPrimaryColors;
use App\Filament\Resources\JerseyPrimaryColors\Schemas\JerseyPrimaryColorForm;
use App\Filament\Resources\JerseyPrimaryColors\Tables\JerseyPrimaryColorsTable;
use App\Models\JerseyPrimaryColor;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class JerseyPrimaryColorResource extends Resource
{
    protected static ?string $model = JerseyPrimaryColor::class;
    protected static ?string $navigationLabel = 'Warna Utama Jersey';
    protected static string|UnitEnum|null $navigationGroup = 'Kelola Jersey';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Swatch;

    public static function form(Schema $schema): Schema
    {
        return JerseyPrimaryColorForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JerseyPrimaryColorsTable::configure($table);
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
            'index' => ListJerseyPrimaryColors::route('/'),
            'create' => CreateJerseyPrimaryColor::route('/create'),
            'edit' => EditJerseyPrimaryColor::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}

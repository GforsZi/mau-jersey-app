<?php

namespace App\Filament\Resources\JerseyTypes;

use App\Filament\Resources\JerseyTypes\Pages\CreateJerseyType;
use App\Filament\Resources\JerseyTypes\Pages\EditJerseyType;
use App\Filament\Resources\JerseyTypes\Pages\ListJerseyTypes;
use App\Filament\Resources\JerseyTypes\Schemas\JerseyTypeForm;
use App\Filament\Resources\JerseyTypes\Tables\JerseyTypesTable;
use App\Models\JerseyType;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class JerseyTypeResource extends Resource
{
    protected static ?string $model = JerseyType::class;
    protected static ?string $navigationLabel = 'Jenis Jersey';
    protected static string|UnitEnum|null $navigationGroup = 'Kelola Jersey';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::Tag;

    public static function form(Schema $schema): Schema
    {
        return JerseyTypeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JerseyTypesTable::configure($table);
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
            'index' => ListJerseyTypes::route('/'),
            'create' => CreateJerseyType::route('/create'),
            'edit' => EditJerseyType::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}

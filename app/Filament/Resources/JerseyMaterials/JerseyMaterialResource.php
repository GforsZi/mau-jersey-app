<?php

namespace App\Filament\Resources\JerseyMaterials;

use App\Filament\Resources\JerseyMaterials\Pages\CreateJerseyMaterial;
use App\Filament\Resources\JerseyMaterials\Pages\EditJerseyMaterial;
use App\Filament\Resources\JerseyMaterials\Pages\ListJerseyMaterials;
use App\Filament\Resources\JerseyMaterials\Schemas\JerseyMaterialForm;
use App\Filament\Resources\JerseyMaterials\Tables\JerseyMaterialsTable;
use App\Models\JerseyMaterial;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class JerseyMaterialResource extends Resource
{
    protected static ?string $model = JerseyMaterial::class;
    protected static ?string $navigationLabel = 'bahan Jersey';
    protected static string|UnitEnum|null $navigationGroup = 'Kelola Jersey';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Square3Stack3d;

    public static function form(Schema $schema): Schema
    {
        return JerseyMaterialForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JerseyMaterialsTable::configure($table);
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
            'index' => ListJerseyMaterials::route('/'),
            'create' => CreateJerseyMaterial::route('/create'),
            'edit' => EditJerseyMaterial::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}

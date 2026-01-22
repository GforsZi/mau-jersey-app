<?php

namespace App\Filament\Resources\JerseyColorAccents;

use App\Filament\Resources\JerseyColorAccents\Pages\CreateJerseyColorAccent;
use App\Filament\Resources\JerseyColorAccents\Pages\EditJerseyColorAccent;
use App\Filament\Resources\JerseyColorAccents\Pages\ListJerseyColorAccents;
use App\Filament\Resources\JerseyColorAccents\Schemas\JerseyColorAccentForm;
use App\Filament\Resources\JerseyColorAccents\Tables\JerseyColorAccentsTable;
use App\Models\JerseyColorAccent;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class JerseyColorAccentResource extends Resource
{
    protected static ?string $model = JerseyColorAccent::class;
    protected static ?string $navigationLabel = 'Warna Aksen';
    protected static string|UnitEnum|null $navigationGroup = 'Kelola Jersey';
    protected static ?int $navigationSort = 5;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::EyeDropper;

    public static function form(Schema $schema): Schema
    {
        return JerseyColorAccentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JerseyColorAccentsTable::configure($table);
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
            'index' => ListJerseyColorAccents::route('/'),
            'create' => CreateJerseyColorAccent::route('/create'),
            'edit' => EditJerseyColorAccent::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}

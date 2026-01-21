<?php

namespace App\Filament\Resources\Jerseys;

use App\Filament\Resources\Jerseys\Pages\CreateJersey;
use App\Filament\Resources\Jerseys\Pages\EditJersey;
use App\Filament\Resources\Jerseys\Pages\ListJerseys;
use App\Filament\Resources\Jerseys\Schemas\JerseyForm;
use App\Filament\Resources\Jerseys\Tables\JerseysTable;
use App\Models\Jersey;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class JerseyResource extends Resource
{
    protected static ?string $model = Jersey::class;
    protected static ?string $navigationLabel = 'Jersey';
    protected static string|UnitEnum|null $navigationGroup = 'Kelola Jersey';
    protected static ?int $navigationSort = 2;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Cube;

    public static function form(Schema $schema): Schema
    {
        return JerseyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JerseysTable::configure($table);
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
            'index' => ListJerseys::route('/'),
            'create' => CreateJersey::route('/create'),
            'edit' => EditJersey::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}

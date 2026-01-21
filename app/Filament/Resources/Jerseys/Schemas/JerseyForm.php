<?php

namespace App\Filament\Resources\Jerseys\Schemas;

use App\Models\JerseyPrimaryColor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class JerseyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')->required(),
            TextInput::make('stock_keeping_unit')->required(),
            Textarea::make('description')->required()->columnSpanFull(),
            TextInput::make('minimum_order')->required(),
            TextInput::make('price')->required(),
            Select::make('status')
                ->options(['tersedia' => 'Tersedia', 'terjual' => 'Terjual', 'tidak_aktif' => 'Tidak aktif'])
                ->required(),
            Select::make('primary_color_id')
                ->label('Author')
                ->options(JerseyPrimaryColor::query()->pluck('color_name', 'id'))
                ->searchable(),
            TextInput::make('primary_material_id')->required()->numeric(),
        ]);
    }
}

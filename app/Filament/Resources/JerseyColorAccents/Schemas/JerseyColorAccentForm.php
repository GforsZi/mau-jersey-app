<?php

namespace App\Filament\Resources\JerseyColorAccents\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JerseyColorAccentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('color_name')
                    ->required(),
                TextInput::make('code_color')
                    ->required(),
            ]);
    }
}

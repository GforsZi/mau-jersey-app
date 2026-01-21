<?php

namespace App\Filament\Resources\JerseyTypes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JerseyTypeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->required(),
                TextInput::make('name')
                    ->required(),
            ]);
    }
}

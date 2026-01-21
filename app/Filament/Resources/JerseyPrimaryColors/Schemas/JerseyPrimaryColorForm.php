<?php

namespace App\Filament\Resources\JerseyPrimaryColors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JerseyPrimaryColorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([TextInput::make('color_name')->required(), TextInput::make('code_color')->required()]);
    }
}

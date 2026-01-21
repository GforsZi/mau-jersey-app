<?php

namespace App\Filament\Resources\JerseyMaterials\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class JerseyMaterialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([TextInput::make('slug')->required(), TextInput::make('name')->required()]);
    }
}

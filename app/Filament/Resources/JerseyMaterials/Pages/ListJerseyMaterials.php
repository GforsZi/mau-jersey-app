<?php

namespace App\Filament\Resources\JerseyMaterials\Pages;

use App\Filament\Resources\JerseyMaterials\JerseyMaterialResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJerseyMaterials extends ListRecords
{
    protected static string $resource = JerseyMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

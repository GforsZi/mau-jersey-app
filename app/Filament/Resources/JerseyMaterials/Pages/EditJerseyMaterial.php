<?php

namespace App\Filament\Resources\JerseyMaterials\Pages;

use App\Filament\Resources\JerseyMaterials\JerseyMaterialResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditJerseyMaterial extends EditRecord
{
    protected static string $resource = JerseyMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}

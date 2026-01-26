<?php

namespace App\Filament\Resources\JerseyMaterials\Pages;

use App\Filament\Resources\JerseyMaterials\JerseyMaterialResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateJerseyMaterial extends CreateRecord
{
    protected static string $resource = JerseyMaterialResource::class;

    protected function getFormActions(): array
    {
        return [
            Action::make('create')->label('Simpan')->submit('create')->color('primary'),
            Action::make('cancel')
                ->label('Batal')
                ->color('gray')
                ->icon('heroicon-o-x-mark')
                ->url($this->getResource()::getUrl()),
        ];
    }
}

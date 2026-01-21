<?php

namespace App\Filament\Resources\JerseyPrimaryColors\Pages;

use App\Filament\Resources\JerseyPrimaryColors\JerseyPrimaryColorResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditJerseyPrimaryColor extends EditRecord
{
    protected static string $resource = JerseyPrimaryColorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\JerseyTypes\Pages;

use App\Filament\Resources\JerseyTypes\JerseyTypeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditJerseyType extends EditRecord
{
    protected static string $resource = JerseyTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}

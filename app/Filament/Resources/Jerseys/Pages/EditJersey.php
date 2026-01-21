<?php

namespace App\Filament\Resources\Jerseys\Pages;

use App\Filament\Resources\Jerseys\JerseyResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditJersey extends EditRecord
{
    protected static string $resource = JerseyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}

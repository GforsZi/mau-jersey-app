<?php

namespace App\Filament\Resources\JerseyColorAccents\Pages;

use App\Filament\Resources\JerseyColorAccents\JerseyColorAccentResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditJerseyColorAccent extends EditRecord
{
    protected static string $resource = JerseyColorAccentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}

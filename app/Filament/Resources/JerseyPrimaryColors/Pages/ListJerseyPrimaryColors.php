<?php

namespace App\Filament\Resources\JerseyPrimaryColors\Pages;

use App\Filament\Resources\JerseyPrimaryColors\JerseyPrimaryColorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJerseyPrimaryColors extends ListRecords
{
    protected static string $resource = JerseyPrimaryColorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

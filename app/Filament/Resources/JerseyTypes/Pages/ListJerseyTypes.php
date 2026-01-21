<?php

namespace App\Filament\Resources\JerseyTypes\Pages;

use App\Filament\Resources\JerseyTypes\JerseyTypeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJerseyTypes extends ListRecords
{
    protected static string $resource = JerseyTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

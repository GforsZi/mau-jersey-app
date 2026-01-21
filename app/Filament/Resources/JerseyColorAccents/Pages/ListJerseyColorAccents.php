<?php

namespace App\Filament\Resources\JerseyColorAccents\Pages;

use App\Filament\Resources\JerseyColorAccents\JerseyColorAccentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJerseyColorAccents extends ListRecords
{
    protected static string $resource = JerseyColorAccentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

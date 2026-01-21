<?php

namespace App\Filament\Resources\JerseyTypes\Pages;

use App\Filament\Resources\JerseyTypes\JerseyTypeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateJerseyType extends CreateRecord
{
    protected static string $resource = JerseyTypeResource::class;
}

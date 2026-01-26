<?php

namespace App\Filament\Resources\JerseyColorAccents\Pages;

use App\Filament\Resources\JerseyColorAccents\JerseyColorAccentResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateJerseyColorAccent extends CreateRecord
{
    protected static string $resource = JerseyColorAccentResource::class;

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

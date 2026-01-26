<?php

namespace App\Filament\Resources\Jerseys\Pages;

use App\Filament\Resources\Jerseys\JerseyResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateJersey extends CreateRecord
{
    protected static string $resource = JerseyResource::class;

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

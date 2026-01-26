<?php

namespace App\Filament\Resources\JerseyPrimaryColors\Pages;

use App\Filament\Resources\JerseyPrimaryColors\JerseyPrimaryColorResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateJerseyPrimaryColor extends CreateRecord
{
    protected static string $resource = JerseyPrimaryColorResource::class;

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

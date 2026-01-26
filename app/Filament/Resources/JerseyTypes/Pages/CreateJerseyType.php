<?php

namespace App\Filament\Resources\JerseyTypes\Pages;

use App\Filament\Resources\JerseyTypes\JerseyTypeResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateJerseyType extends CreateRecord
{
    protected static string $resource = JerseyTypeResource::class;

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

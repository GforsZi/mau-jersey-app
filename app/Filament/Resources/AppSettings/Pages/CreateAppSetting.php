<?php

namespace App\Filament\Resources\AppSettings\Pages;

use App\Filament\Resources\AppSettings\AppSettingResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateAppSetting extends CreateRecord
{
    protected static string $resource = AppSettingResource::class;

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

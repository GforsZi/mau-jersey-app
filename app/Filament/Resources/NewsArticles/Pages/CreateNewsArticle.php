<?php

namespace App\Filament\Resources\NewsArticles\Pages;

use App\Filament\Resources\NewsArticles\NewsArticleResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsArticle extends CreateRecord
{
    protected static string $resource = NewsArticleResource::class;

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

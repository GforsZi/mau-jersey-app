<?php

namespace App\Filament\Resources\NewsArticles\Schemas;

use App\Models\NewsArticle;
use Filament\Schemas\Schema;
use Filament\Infolists;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Flex;
use Filament\Schemas\Components\Section;

class NewsArticleInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextEntry::make('content')->html()->prose(),
            Flex::make([
                Section::make()
                    ->heading(fn(NewsArticle $record): string => $record->title)
                    ->schema([ImageEntry::make('image_thumbnail')->hiddenLabel()->imageSize('100%'), TextEntry::make('categories.name')->label('Kategori')->badge()->color('primary')]),
            ]),
        ]);
    }
}

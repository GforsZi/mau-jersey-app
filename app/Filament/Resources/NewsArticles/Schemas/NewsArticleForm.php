<?php

namespace App\Filament\Resources\NewsArticles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class NewsArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([TextInput::make('title')->required(), FileUpload::make('image_thumbnail')->image(), Textarea::make('content')->required()->columnSpanFull()]);
    }
}

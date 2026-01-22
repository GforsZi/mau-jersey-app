<?php

namespace App\Filament\Resources\NewsArticles\Schemas;

use App\Models\ArticleCategory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Schemas\Components\Flex;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class NewsArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Flex::make([
                Section::make([
                    TextInput::make('title')->required()->live(onBlur: true)->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')->required(),
                    Select::make('status')
                        ->options([
                            'draf' => 'draf',
                            'publikasi' => 'publikasi',
                        ])
                        ->searchable(),
                    Select::make('technologies')
                        ->relationship('categories', 'name')
                        ->preload()
                        ->multiple()
                        ->options(ArticleCategory::query()->pluck('name', 'id'))
                        ->createOptionForm([
                            TextInput::make('name')->required()->live(onBlur: true)->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                            TextInput::make('slug')->required(),
                        ]),
                    FileUpload::make('image_thumbnail')
                        ->image()
                        ->imageEditor()
                        ->imageEditorAspectRatioOptions(['16:9', '4:3', '1:1'])
                        ->directory('/news/thumbnail'),
                ]),
            ]),
            RichEditor::make('content')->fileAttachmentsDirectory('articles/attachments')->required(),
        ]);
    }
}

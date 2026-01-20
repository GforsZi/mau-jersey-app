<?php

namespace App\Filament\Resources\Pages\Schemas;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('slug')->label('slug')->required(),
            TextInput::make('title')->label('title')->required(),
            Builder::make('content')->blocks([
                Block::make('heading')
                    ->schema([
                        TextInput::make('content')->label('Heading')->required(),
                        Select::make('level')
                            ->options([
                                'h1' => 'Heading 1',
                                'h2' => 'Heading 2',
                                'h3' => 'Heading 3',
                                'h4' => 'Heading 4',
                                'h5' => 'Heading 5',
                                'h6' => 'Heading 6',
                            ])
                            ->required(),
                    ])
                    ->columns(2),
                Block::make('paragraph')->schema([Textarea::make('content')->label('Paragraph')->required()]),
                Block::make('image')->schema([FileUpload::make('url')->label('Image')->image()->directory('/hero')->required(), TextInput::make('alt')->label('Alt text')->required()]),
            ]),
        ]);
    }
}

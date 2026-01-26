<?php

namespace App\Filament\Resources\Jerseys\Schemas;

use App\Models\JerseyPrimaryColor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Components\Flex;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class JerseyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Flex::make([
                Section::make([
                    TextInput::make('title')->required(),
                    TextInput::make('stock_keeping_unit')->required(),
                    Textarea::make('description')->required()->columnSpanFull(),
                    TextInput::make('minimum_order')->required(),
                    TextInput::make('price')->required(),
                    Select::make('status')
                        ->options(['tersedia' => 'Tersedia', 'terjual' => 'Terjual', 'tidak_aktif' => 'Tidak aktif'])
                        ->required(),
                    Select::make('primary_color_id')
                        ->label('Author')
                        ->options(JerseyPrimaryColor::query()->pluck('color_name', 'id'))
                        ->searchable(),
                    TextInput::make('primary_material_id')->required()->numeric(),
                ]),
            ]),
            Section::make([
                RichEditor::make('content')->fileAttachmentsDirectory('articles/attachments')->required(),
                FileUpload::make('image_thumbnail')
                    ->image()
                    ->imageEditor()
                    ->multiple()
                    ->imageEditorAspectRatioOptions(['16:9', '4:3', '1:1'])
                    ->directory('/jersey/product'),
            ]),
        ]);
    }
}

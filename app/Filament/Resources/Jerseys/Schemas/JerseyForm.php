<?php

namespace App\Filament\Resources\Jerseys\Schemas;

use App\Models\JerseyMaterial;
use App\Models\JerseyPrimaryColor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Components\Flex;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class JerseyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Flex::make([
                Section::make([
                    TextInput::make('title')->label('Judul')->required()->live(onBlur: true)->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')->required()->readOnly(),
                    TextInput::make('stock_keeping_unit')->label('Stok Tersedia')->numeric()->minValue(0)->required(),
                    TextInput::make('minimum_order')->label('Minimal Pemesanan')->numeric()->minValue(0)->required(),
                    TextInput::make('price')->label('Harga')->numeric()->minValue(0)->required(),
                    Select::make('status')
                        ->label('Status')
                        ->options(['tersedia' => 'Tersedia', 'terjual' => 'Terjual', 'tidak_aktif' => 'Tidak aktif'])
                        ->searchable()
                        ->required(),
                    Select::make('primary_color_id')
                        ->label('Warna Utama')
                        ->options(JerseyPrimaryColor::query()->pluck('color_name', 'id'))
                        ->searchable(),
                    Select::make('primary_material_id')
                        ->label('Bahan')
                        ->options(JerseyMaterial::query()->pluck('name', 'id'))
                        ->searchable(),
                ]),
            ]),
            Section::make([
                RichEditor::make('description')->fileAttachmentsDirectory('articles/attachments')->required(),
                Repeater::make('images')
                    ->label('Galeri Jersey')
                    ->relationship('images')
                    ->schema([FileUpload::make('image')->image()->directory('/jersey/image')->required()])
                    ->columnSpanFull()
                    ->minItems(1),
            ]),
        ]);
    }
}

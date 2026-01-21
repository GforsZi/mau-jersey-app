<?php

namespace App\Filament\Resources\AppSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class AppSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Tabs::make('Data Produk')
                ->columnSpanFull()
                ->tabs([
                    Tab::make('Informasi Aplikasi')->schema([TextInput::make('title')->required(), TextInput::make('value')->required()]),

                    Tab::make('Layanan Pelanggan')->schema([TextInput::make('price')->required(), TextInput::make('discount')->numeric()]),
                ])
                ->vertical(),
        ]);
    }
}

<?php

namespace App\Filament\Resources\AppSettings\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class AppSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Tabs::make('Settings Tabs')
                ->columnSpanFull()
                ->tabs([
                    Tab::make('Logo')
                        ->icon('heroicon-o-photo')
                        ->schema([
                            TextInput::make('app_headline_title')->label('Judul')->maxLength(1000)->required(),

                            Textarea::make('app_subheadline_title')->label('Sub Judul')->rows(4)->maxLength(1000),

                            Textarea::make('app_footer_title')->label('Navigasi Bawah')->rows(4)->maxLength(1000),
                        ]),

                    Tab::make('Layanan Pelanggan')->icon('heroicon-o-phone')->schema([
                        // nanti isi schema layanan pelanggan
                    ]),

                    Tab::make('Media Sosial')->icon('heroicon-o-device-phone-mobile')->schema([
                        // schema media sosial
                    ]),

                    Tab::make('Top Listing')->icon('heroicon-o-home-modern')->schema([
                        // schema top listing
                    ]),
                ])
                ->vertical(),
        ]);
    }
}

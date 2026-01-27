<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use App\Models\AppSetting;
use BackedEnum;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use UnitEnum;

class GeneralSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationLabel = 'Pangaturan Umum';
    protected static string|UnitEnum|null $navigationGroup = 'Pengaturan Aplikasi';
    protected static ?int $navigationSort = 1;
    protected static string|BackedEnum|null $navigationIcon = Heroicon::Cog6Tooth;

    protected string $view = 'filament.pages.general-settings';

    public array $data = [];
    public $setting = [];

    public function mount(): void
    {
        $this->setting = AppSetting::get();
        $this->form->fill($this->setting->pluck('value', 'key')->toArray());
    }

    public function form(Schema $schema): Schema
    {
        $form = [];
        foreach ($this->setting as $data) {
            $form[] = TextInput::make($data->key)->label($data->title)->required();
        }
        return $schema->schema($form)->statePath('data');
    }

    public function save(): void
    {
        foreach ($this->data as $key => $value) {
            AppSetting::set($key, $value);
        }

        Notification::make('success')->title('berhasil')->success()->send();
    }
}

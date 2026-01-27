<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    protected $guarded = [];

    public static function set(string $key, $value): void
    {
        self::query()->updateOrCreate(['key' => $key], ['value' => is_array($value) ? json_encode($value) : $value]);
    }
}

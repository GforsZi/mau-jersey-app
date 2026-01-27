<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('app_settings')->updateOrInsert(['title' => 'App Name', 'type' => 'text', 'key' => 'app_name', 'value' => 'asd', 'created_at' => $now, 'updated_at' => $now]);
    }
}

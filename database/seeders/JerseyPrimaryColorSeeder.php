<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JerseyPrimaryColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        /*
        |--------------------------------------------------------------------------
        | Jersey Primary Colors
        |--------------------------------------------------------------------------
        */
        $primaryColors = [
            ['Merah', '#FF0000'],
            ['Biru', '#0033CC'],
            ['Hitam', '#000000'],
            ['Putih', '#FFFFFF'],
            ['Kuning', '#FFD700'],
            ['Hijau', '#008000'],
            ['Navy', '#001F3F'],
            ['Abu-abu', '#808080'],
            ['Ungu', '#6F2DA8'],
            ['Orange', '#FF7F00'],
        ];

        foreach ($primaryColors as [$name, $code]) {
            DB::table('jersey_primary_colors')->updateOrInsert(
                ['code_color' => $code],
                [
                    'color_name' => $name,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            );
        }
    }
}

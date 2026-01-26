<?php namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class JerseyColorAccentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        /*
        |--------------------------------------------------------------------------
        | Jersey Color Accents
        |--------------------------------------------------------------------------
        */
        $accentColors = [
            ['Emas', '#D4AF37'],
            ['Perak', '#C0C0C0'],
            ['Merah Tua', '#8B0000'],
            ['Biru Muda', '#87CEEB'],
            ['Hijau Neon', '#39FF14'],
            ['Pink', '#FF69B4'],
            ['Cyan', '#00FFFF'],
            ['Hitam', '#000000'],
            ['Putih', '#FFFFFF'],
        ];

        foreach ($accentColors as [$name, $code]) {
            DB::table('jersey_color_accents')->updateOrInsert(
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

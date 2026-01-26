<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JerseyMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        /*
        |--------------------------------------------------------------------------
        | Jersey Materials
        |--------------------------------------------------------------------------
        */
        $materials = ['Dryfit', 'Dryfit Emboss', 'Paragon', 'Hyget', 'Serena', 'Benzema', 'Milano', 'Wafer', 'Polyester PE'];

        foreach ($materials as $material) {
            DB::table('jersey_materials')->updateOrInsert(
                ['slug' => Str::slug($material)],
                [
                    'name' => $material,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            );
        }
    }
}

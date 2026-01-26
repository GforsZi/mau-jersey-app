<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JerseyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        /*
        |--------------------------------------------------------------------------
        | Jersey Types
        |--------------------------------------------------------------------------
        */
        $types = ['Home', 'Away', 'Third', 'Training', 'Goalkeeper', 'Futsal', 'Basket', 'Custom Event'];

        foreach ($types as $type) {
            DB::table('jersey_types')->updateOrInsert(
                ['slug' => Str::slug($type)],
                [
                    'name' => $type,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            );
        }
    }
}

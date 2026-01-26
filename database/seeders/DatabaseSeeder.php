<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'matcha aquatics',
                'password' => Hash::make('11111111'),
                'email_verified_at' => now(),
            ],
        );

        $this->call([JerseyMaterialSeeder::class, JerseyPrimaryColorSeeder::class, JerseyTypeSeeder::class, JerseyColorAccentSeeder::class]);
    }
}
